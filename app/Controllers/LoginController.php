<?php

namespace App\Controllers;

use CodeIgniter\Controller;

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{

    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        if (session()->has('admin_logged_in')) {
            return redirect()->to('/admin');
        }

        $data = [
            'page' => 'login',
            'config' => config('Auth'),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/login', $data);
    }


    public function processLogin()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $admin = $this->adminModel->where('email', $email)->first();

        if ($admin && $password == $admin['password']) {
            $session = session();
            $session->set([
                'admin_logged_in' => true,
                'admin_id' => $admin['id'],
                'admin_email' => $admin['email'],
                'username' => $admin['username'],
                'admin_from' => $admin['created_at']
            ]);

            return redirect()->to('/admin');
        }

        return redirect()->back()->withInput()->with('error', 'Invalid credentials');
    }
}
