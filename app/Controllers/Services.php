<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index(): string
    {
        $serviceModel = new \App\Models\ServiceModel();
        $data = [
            'page' => 'services',
            'services' => $serviceModel->where('service_availability', 1)->findAll(),
        ];
        return view('services', $data);
    }
}
