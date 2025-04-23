<?php

namespace App\Controllers;

use App\Models\ContactModel;
use Config\Services;

class Contact extends BaseController
{
    public function index(): string
    {
        $data = [
            'page' => 'contact',
        ];
        return view('contact', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'fname' => 'required|max_length[50]',
            'lname' => 'required|max_length[50]',
            'email' => 'required|valid_email|max_length[100]',
            'message' => 'required|max_length[2000]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        $data = [
            'fname' => $this->request->getPost('fname'),
            'lname' => $this->request->getPost('lname'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ];

        $contactModel = new ContactModel();
        $contactModel->save($data);


        $email = Services::email();

        try {
            $email->setTo('mdmaasuque@gmail.com');
            $email->setFrom('zakislam@shameemtraders.top', 'Driven Code');
            $email->setSubject('New Contact Inquiry');
            $email->setMessage(view('contact_email_template', $data));

            if ($email->send()) {
                return redirect()->back()
                    ->with('toastr', [
                        'type' => 'success',
                        'message' => 'Your message has been sent successfully!'
                    ]);
            } else {
                log_message('error', 'Email failed to send: ' . $email->printDebugger());
                return redirect()->back()
                    ->with('toastr', [
                        'type' => 'error',
                        'message' => 'Message saved, but email failed to send.'
                    ]);
            }
        } catch (\Exception $e) {
            log_message('error', 'Email error: ' . $e->getMessage());
            return redirect()->back()
                ->with('toastr', [
                    'type' => 'error',
                    'message' => 'An error occurred while sending the email.'
                ]);
        }

        return redirect()->back()
            ->with('toastr', [
                'type' => 'success',
                'message' => 'Your message has been sent successfully!'
            ]);
    }
}
