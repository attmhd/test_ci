<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;



class Login extends Controller
{
   

   
    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        return $this->response->setJSON([
            'username' => $username,
            'password' => $password
        ])->setStatusCode(401);


    
    }
}