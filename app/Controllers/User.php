<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class User extends ResourceController
{
    //get user
    public function index()
    {
        $user_model = new UserModel();
        $data = $user_model->findAll();
        return $this->respond($data, 200);
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

    // //create user
    // public function create()
    // {
    //     $user_model = new UserModel();
    //     $data = [
    //         'iduser' => $this->request->getVar('iduser'),
    //         'namauser' => $this->request->getVar('namauser'),
    //         'username' => $this->request->getVar('username'),
    //         'password' => $this->request->getVar('password'),
    //         'level' => $this->request->getVar('level'),
    //     ];
    //     $user_model->insert($data);
    //     $response = [
    //         'status' => 201,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'User berhasil ditambahkan',
    //             'data' => $data
    //         ]
    //     ];
    //     return $this->respondCreated($response, 201);
    // }

 

}