<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'fname',
        'lname',
        'email',
        'tel',
        'address',
        'date',
        'status',
        'service_id',
        'selected_time',
        'payment_method'
    ];
    protected $useTimestamps = true;

    // Optional: you can define validation rules for the model
    protected $validationRules = [
        'fname' => 'required|min_length[3]',
        'lname' => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'tel' => 'required|min_length[10]',
        'address' => 'required|min_length[3]',
        'date' => 'required|valid_date',
        'service_id' => 'required|is_natural_no_zero',
        'selected_time' => 'required',
        'payment_method' => 'required'
    ];


    public function getBookingWithService($booking_id)
    {
        $builder = $this->builder();
        $builder->select('bookings.*, services.service_name, services.duration, services.service_cost');
        $builder->join('services', 'services.id = bookings.service_id', 'left');
        $builder->where('bookings.id', $booking_id);
        return $builder->get()->getRowArray();
    }

    public function getAllBookingsWithService()
    {
        return $this->select('bookings.*, services.service_name, services.duration, services.service_cost')
            ->join('services', 'services.id = bookings.service_id', 'left')
            ->orderBy('bookings.created_at', 'DESC')
            ->findAll();
    }
}
