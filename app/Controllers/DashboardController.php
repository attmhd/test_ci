<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class DashboardController extends ResourceController
{
    public function index()
    {
        return view('dashboard_view');
    }
}