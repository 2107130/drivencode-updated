<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\ServiceModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        if (!session()->has('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }
    }

    public function index()
    {
        $serviceModel = new \App\Models\ServiceModel();
        $bookingModel = new \App\Models\BookingModel();
        $contactModel = new \App\Models\ContactModel();

        $data = [
            'page' => 'dashboard',
            'totalServices' => $serviceModel->countAllResults(),
            'availableServices' => $serviceModel->where('service_availability', 1)->countAllResults(),
            'totalAppointments' => $bookingModel->countAllResults(),
            'pendingAppointments' => $bookingModel->where('status', 'pending')->countAllResults(),
            'completedAppointments' => $bookingModel->where('status', 'completed')->countAllResults(),
            'activeAppointments' => $bookingModel->where('status', 'confirmed')->countAllResults(),
            'cancelledAppointments' => $bookingModel->where('status', 'cancelled')->countAllResults(),
            'totalInquiries' => $contactModel->countAllResults()
        ];


        return view('admin/index', $data);
    }

    public function services()
    {
        $serviceModel = new \App\Models\ServiceModel();

        $data = [
            'page' => 'services',
            'services' => $serviceModel->findAll()
        ];

        return view('admin/services', $data);
    }

    public function add_new_service()
    {
        $data = [
            'page' => 'services'
        ];

        return view('admin/add_new_service', $data);
    }

    public function service_store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'service_name' => 'required|max_length[255]',
            'service_cost' => 'required|decimal',
            'service_start_time' => 'required',
            'service_end_time' => 'required',
            'service_image' => [
                'rules' => 'uploaded[service_image]|max_size[service_image,5120]|is_image[service_image]',
                'label' => 'Service Image'
            ],
            'service_description' => 'required|min_length[10]',
            'duration' => 'required|integer|greater_than_equal_to[15]|less_than_equal_to[480]',
            'service_availability' => 'permit_empty'
        ];

        $start_time = $this->request->getPost('service_start_time');
        $end_time = $this->request->getPost('service_end_time');

        if ($start_time && $end_time && strtotime($end_time) <= strtotime($start_time)) {
            $validation->setError('service_end_time', 'End time must be greater than start time.');
        }

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $imageFile = $this->request->getFile('service_image');
        $imageName = '';

        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . 'public/uploads/services', $imageName);
        }

        $serviceData = [
            'service_name' => $this->request->getPost('service_name'),
            'service_cost' => $this->request->getPost('service_cost'),
            'service_start_time' => $this->request->getPost('service_start_time'),
            'service_end_time' => $this->request->getPost('service_end_time'),
            'service_image' => $imageName,
            'service_description' => $this->request->getPost('service_description'),
            'duration' => $this->request->getPost('duration'),
            'service_availability' => $this->request->getPost('service_availability') ? 1 : 0
        ];

        $serviceModel = new \App\Models\ServiceModel();

        if ($serviceModel->save($serviceData)) {
            return redirect()->to('/admin/services')
                ->with('toastr', [
                    'type' => 'success',
                    'message' => 'Service added successfully!'
                ]);
        }

        return redirect()->back()
            ->withInput()
            ->with('toastr', [
                'type' => 'error',
                'message' => 'Failed to add service. Please try again.'
            ]);
    }



    public function editService($id)
    {
        $serviceModel = new \App\Models\ServiceModel();
        $service = $serviceModel->find($id);

        if (!$service) {
            return redirect()->to('/admin/services')->with('toastr', [
                'type' => 'error',
                'message' => 'Service not found'
            ]);
        }

        $data = [
            'page' => 'services',
            'service' => $service
        ];

        return view('admin/service_edit', $data);
    }

    public function updateService($id)
    {
        $serviceModel = new \App\Models\ServiceModel();
        $existingService = $serviceModel->find($id);

        if (!$existingService) {
            return redirect()->to('/admin/services')->with('toastr', [
                'type' => 'error',
                'message' => 'Service not found.'
            ]);
        }

        // Validation rules
        $rules = [
            'service_name' => 'required|max_length[255]',
            'service_cost' => 'required|decimal',
            'service_start_time' => 'required',
            'service_end_time' => 'required',
            'service_description' => 'permit_empty|string',
            'duration' => 'required|integer|greater_than_equal_to[15]|less_than_equal_to[480]',
            'service_image' => [
                'rules' => 'permit_empty|uploaded[service_image]|max_size[service_image,5120]|is_image[service_image]',
                'label' => 'Service Image'
            ],
            'service_availability' => 'permit_empty'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Prepare update data
        $updateData = [
            'service_name' => $this->request->getPost('service_name'),
            'service_cost' => $this->request->getPost('service_cost'),
            'service_start_time' => $this->request->getPost('service_start_time'),
            'service_end_time' => $this->request->getPost('service_end_time'),
            'service_description' => $this->request->getPost('service_description'),
            'duration' => $this->request->getPost('duration'),
            'service_availability' => $this->request->getPost('service_availability') ? 1 : 0
        ];

        // Handle image upload (if a new image was uploaded)
        $image = $this->request->getFile('service_image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/services', $newName);
            $updateData['service_image'] = $newName;

            // Delete old image (optional)
            if (!empty($existingService['service_image']) && file_exists(ROOTPATH . 'public/uploads/services/' . $existingService['service_image'])) {
                unlink(ROOTPATH . 'public/uploads/services/' . $existingService['service_image']);
            }
        }

        // Update service
        if ($serviceModel->update($id, $updateData)) {
            return redirect()->to('/admin/services')->with('toastr', [
                'type' => 'success',
                'message' => 'Service updated successfully!'
            ]);
        }

        return redirect()->back()->withInput()->with('toastr', [
            'type' => 'error',
            'message' => 'Failed to update service. Please try again.'
        ]);
    }

    public function deleteService($id)
    {
        $serviceModel = new \App\Models\ServiceModel();
        $service = $serviceModel->find($id);

        if (!$service) {
            return redirect()->to('/admin/services')->with('toastr', [
                'type' => 'error',
                'message' => 'Service not found.'
            ]);
        }

        // Delete the service image (if exists)
        if (!empty($service['service_image']) && file_exists(ROOTPATH . 'public/uploads/services/' . $service['service_image'])) {
            unlink(ROOTPATH . 'public/uploads/services/' . $service['service_image']);
        }

        if ($serviceModel->delete($id)) {
            return redirect()->to('/admin/services')->with('toastr', [
                'type' => 'success',
                'message' => 'Service deleted successfully.'
            ]);
        }

        return redirect()->to('/admin/services')->with('toastr', [
            'type' => 'error',
            'message' => 'Failed to delete service. Please try again.'
        ]);
    }



    public function bookings()
    {
        $bookingModel = new \App\Models\BookingModel();
        $bookings = $bookingModel->getAllBookingsWithService();

        return view('admin/bookings', [
            'page' => 'bookings',
            'bookings' => $bookings
        ]);
    }

    public function updateServiceBookingtatus($id)
    {
        $bookingModel = new \App\Models\BookingModel();
        $booking = $bookingModel->find($id);

        if ($booking) {
            $bookingModel->update($id, [
                'status' => $this->request->getPost('status')
            ]);
        }

        return redirect()->back()
            ->with('toastr', [
                'type' => 'success',
                'message' => 'Service Booking status updated'
            ]);
    }

    public function deleteServiceBooking($id)
    {
        $bookingModel = new \App\Models\BookingModel();
        $booking = $bookingModel->find($id);

        if ($booking) {
            $bookingModel->delete($id);
        }

        return redirect()->back()
            ->with('toastr', [
                'type' => 'success',
                'message' => 'Service Booking deleted successfully'
            ]);
    }


    public function contact_quires()
    {

        $contactModel = new \App\Models\ContactModel();

        $data = [
            'page' => 'customers',
            'inquiries' => $contactModel->orderBy('created_at', 'DESC')->findAll()
        ];

        return view('admin/contact_quires', $data);
    }

    public function deleteInquiry($id)
    {
        $contactModel = new \App\Models\ContactModel();
        $inquiry = $contactModel->find($id);

        if (!$inquiry) {
            return redirect()->back()
                ->with('toastr', [
                    'type' => 'error',
                    'message' => 'Inquiry not found'
                ]);
        }

        $contactModel->delete($id);

        return redirect()->back()
            ->with('toastr', [
                'type' => 'success',
                'message' => 'Inquiry deleted successfully'
            ]);
    }


    /// coded cars


    public function coded_cars()
    {
        $carModel = new \App\Models\CodedCarModel();

        $data = [
            'page' => 'cars',
            'cars' => $carModel->findAll()
        ];

        return view('admin/coded_cars', $data);
    }

    public function add_new_coded_car()
    {
        $data = [
            'page' => 'cars'
        ];

        return view('admin/add_new_coded_car', $data);
    }

    public function coded_car_store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'coded_car_name' => 'required|max_length[255]',
            'coded_car_image' => [
                'rules' => 'uploaded[coded_car_image]|max_size[coded_car_image,5120]|is_image[coded_car_image]',
                'label' => 'Coded Car Image'
            ],
            'coded_car_description' => 'required|min_length[10]',
            'coded_car_date' => 'required|valid_date' // New validation rule for date
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $imageFile = $this->request->getFile('coded_car_image');
        $imageName = '';

        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . 'public/uploads/coded_cars', $imageName);
        }

        $carData = [
            'coded_car_name' => $this->request->getPost('coded_car_name'),
            'coded_car_description' => $this->request->getPost('coded_car_description'),
            'coded_car_image' => $imageName,
            'coded_car_date' => $this->request->getPost('coded_car_date') // Save the coded car date
        ];

        $carModel = new \App\Models\CodedCarModel();

        if ($carModel->save($carData)) {
            return redirect()->to('/admin/coded-cars')
                ->with('toastr', [
                    'type' => 'success',
                    'message' => 'Coded car added successfully!'
                ]);
        }

        return redirect()->back()
            ->withInput()
            ->with('toastr', [
                'type' => 'error',
                'message' => 'Failed to add coded car. Please try again.'
            ]);
    }

    public function coded_car_delete($id)
    {
        $carModel = new \App\Models\CodedCarModel();
        $car = $carModel->find($id);

        if (!$car) {
            return redirect()->to('/admin/coded-cars')->with('toastr', [
                'type' => 'error',
                'message' => 'Coded car not found.'
            ]);
        }

        // Delete the car image (if exists)
        if (!empty($car['coded_car_image']) && file_exists(ROOTPATH . 'public/uploads/coded_cars/' . $car['coded_car_image'])) {
            unlink(ROOTPATH . 'public/uploads/coded_cars/' . $car['coded_car_image']);
        }

        if ($carModel->delete($id)) {
            return redirect()->to('/admin/coded-cars')->with('toastr', [
                'type' => 'success',
                'message' => 'Coded car deleted successfully.'
            ]);
        }

        return redirect()->to('/admin/coded-cars')->with('toastr', [
            'type' => 'error',
            'message' => 'Failed to delete coded car. Please try again.'
        ]);
    }



    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/admin/login');
    }
}
