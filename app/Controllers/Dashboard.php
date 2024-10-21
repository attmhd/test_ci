<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArtikelModel;


class Dashboard extends ResourceController
{
    public function index()
    {
        // return tulisan welcome dashboard dengan format json disertai dengan data dari artikelmodel
        $artikel_model = new ArtikelModel();
        $data = $artikel_model->findAll();




        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Welcome to dashboard',
                'data' => $data
            ]
        ];
        
        return view('admin_dashboard', $response);

    }
}