<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class UserController extends ResourceController
{
    //login
    public function index()
    {
        $user_model = new UserModel();
        $data = $user_model->findAll();
        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'data user berhasil ditampilkan',
                'data' => $data
            ]
        ];
        return $this->respond($response);
    }



    //get user by id
    public function show($id = null)
    {
        $user_model = new UserModel();
        $data = $user_model->getWhere(['iduser' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('User tidak ditemukan');
        }
    }

    //create user
    public function register()
    {
        $user_model = new UserModel();
        $data = [
            'iduser' => $this->request->getVar('iduser'),
            'namauser' => $this->request->getVar('namauser'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $this->request->getVar('level'),
        ];
        $user_model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'message' => [
                'success' => 'User berhasil ditambahkan',
                'data' => $data
            ]
        ];
        return $this->respondCreated($response, 201);
    }

    //auth
    public function auth()
    {
        $user_model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $user_model->getWhere(['username' => $username, 'password' => $password])->getResult();
        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Login succes',
                'data' => $data
            ]
        ];
        if($data){
            return $this->respond($response);
        }else{
            return $this->failNotFound('User tidak ditemukan');
        }
    }


 

}