<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $serviceModel = new \App\Models\ServiceModel();
        $carModel = new \App\Models\CodedCarModel();

        $limit = 6;

        $data = [
            'page' => 'home',
            'services' => $serviceModel->where('service_availability', 1)->findAll(),
            'codedCars' => $carModel->orderBy('id', 'DESC')->findAll($limit),
            'totalCodedCars' => $carModel->countAll(),
        ];

        return view('index', $data);
    }

    public function loadMoreCodedCars()
    {
        $offset = $this->request->getGet('offset') ?? 0;
        $limit = 6;

        $carModel = new \App\Models\CodedCarModel();
        $cars = $carModel->orderBy('id', 'DESC')->findAll($limit, $offset);

        return $this->response->setJSON($cars);
    }
}
