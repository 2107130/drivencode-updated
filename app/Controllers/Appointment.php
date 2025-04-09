<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\ServiceModel;
use Config\Services;

class Appointment extends BaseController
{
    public function index(): string
    {
        $serviceModel = new \App\Models\ServiceModel();
        $data = [
            'page' => 'appointment',
            'services' => $serviceModel->where('service_availability', 1)->findAll(),
        ];
        return view('make-appointment', $data);
    }
    public function getTimeSlots()
    {
        // Get service ID and date from request
        $serviceId = $this->request->getGet('service_id');
        $date = $this->request->getGet('date');

        // Validate presence of required parameters
        if (!$serviceId || !$date) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Service ID and date are required.'
            ]);
        }

        $serviceModel = new ServiceModel();
        $service = $serviceModel->find($serviceId);

        if ($service) {
            $startTime = $service['service_start_time'];
            $endTime = $service['service_end_time'];
            $duration = $service['duration'];

            // Generate all possible time slots
            $availableSlots = $this->generateTimeSlots($startTime, $endTime, $duration);

            // Fetch booked slots for the selected service and date
            $bookingModel = new BookingModel();
            $bookings = $bookingModel->where('service_id', $serviceId)
                ->where('date', $date)
                ->findAll();

            // Extract booked times and format to 'H:i'
            $bookedTimes = [];
            foreach ($bookings as $booking) {
                $bookedTime = date('H:i', strtotime($booking['selected_time']));
                $bookedTimes[] = $bookedTime;
            }

            // Filter out booked slots
            $filteredSlots = array_filter($availableSlots, function ($slot) use ($bookedTimes) {
                return !in_array($slot['time'], $bookedTimes);
            });

            return $this->response->setJSON([
                'status' => 'success',
                'data' => array_values($filteredSlots) // Reset array keys
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Service not found'
            ]);
        }
    }

    private function generateTimeSlots($startTime, $endTime, $duration)
    {
        $timeSlots = [];
        $start = strtotime($startTime);
        $end = strtotime($endTime);

        while ($start < $end) {
            $slotTime = date('H:i', $start);
            $timeSlots[] = ['time' => $slotTime];
            $start = strtotime("+$duration minutes", $start);
        }

        return $timeSlots;
    }



    public function submitBooking()
    {
        $fname = $this->request->getPost('fname');
        $lname = $this->request->getPost('lname');
        $email = $this->request->getPost('email');
        $tel = $this->request->getPost('tel');
        $address = $this->request->getPost('address');
        $date = $this->request->getPost('date');
        $service_id = $this->request->getPost('service');
        $selected_time = $this->request->getPost('selected_time');
        $payment_method = $this->request->getPost('payment_method');

        if (!$fname || !$lname || !$email || !$tel || !$date || !$service_id || !$selected_time || !$payment_method) {
            return $this->response->setJSON(['message' => 'Please fill out all required fields.']);
        }

        $data = [
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'tel' => $tel,
            'address' => $address,
            'date' => $date,
            'service_id' => $service_id,
            'selected_time' => $selected_time,
            'payment_method' => $payment_method,
        ];

        $bookingModel = new BookingModel();
        $bookingModel->save($data);
        $this->_send_email_invoice($data);

        return $this->response->setJSON(['message' => 'Booking successfully submitted!']);
    }

    private function _send_email_invoice($data)
    {
        $serviceModel = new ServiceModel();
        $service = $serviceModel->find($data['service_id']);

        // Add service details to the data array
        $data['service_name'] = $service['service_name'];
        $data['service_cost'] = $service['service_cost'];
        $data['service_duration'] = $service['duration'];

        // Email configuration
        $email = Services::email();
        $email->setTo($data['email']);
        $email->setFrom('zakislam37@gmail.com', 'Driven Code');
        $email->setSubject('Booking Confirmation & Invoice');

        // Generate email message using the dynamic template
        $email->setMessage(view('booking_invoice_template', $data));
        $email->send();
    }
}
