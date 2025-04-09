<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $serviceModel = new \App\Models\ServiceModel();
        $data = [
            'page' => 'home',
            'services' => $serviceModel->where('service_availability', 1)->findAll(),
        ];
        return view('index', $data);
    }
}
