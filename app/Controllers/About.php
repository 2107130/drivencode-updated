<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'page' => 'about',
        ];
        return view('about', $data);
    }
}
