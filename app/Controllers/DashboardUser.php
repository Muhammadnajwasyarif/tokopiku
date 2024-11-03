<?php

// app/Controllers/DashboardController.php
namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        // Ambil data pengguna dari session
        $username = session()->get('username');
        $email = session()->get('email');

        // Kirim data ke view
        return view('dashboard', [
            'username' => $username,
            'email'    => $email,
        ]);
    }
}

