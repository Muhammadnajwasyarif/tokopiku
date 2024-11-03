<?php

namespace App\Controllers;

class DashboardAdmin extends BaseController
{
    public function index(): string
    {
        return view('coza/backend/examples/dashboard');
    }

}
