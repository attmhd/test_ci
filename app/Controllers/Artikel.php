<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArtikelModel;

class Artikel extends ResourceController
{
 
    // get all artikel
    public function index()
    {
        $artikel_model = new ArtikelModel();
        $data = $artikel_model->findAll();
        return $this->respond($data, 200);

        
    }

    //create
    public function create()
    {
        $artikel_model = new ArtikelModel();
        $data = [
            'id_artikel' => $this->request->getVar('id_artikel'),
            'judul_artikel' => $this->request->getVar('judul_artikel'),
        ];
        $artikel_model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'message' => [
                'success' => 'Artikel berhasil ditambahkan',
                'data' => $data
            ]
        ];
        return $this->respondCreated($response, 201);
    }

    //getbyID
    public function show($id = null)
    {
        $artikel_model = new ArtikelModel();
        $data = $artikel_model->getWhere(['id_artikel' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('Artikel tidak ditemukan');
        }
    }

    //delete
    public function delete($id = null)
    {
        $artikel_model = new ArtikelModel();
        $data = $artikel_model->find($id);
        if($data){
            $artikel_model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success' => 'Artikel berhasil dihapus',
                    'data' => $data
                ]
            ];
            return $this->respondDeleted($response, 200);
        }else{
            return $this->failNotFound('Artikel tidak ditemukan');
        }
    }

    //update
    public function update($id = null)
    {
        $artikel_model = new ArtikelModel();
        $data = [
            'id_artikel' => $this->request->getVar('id_artikel'),
            'judul_artikel' => $this->request->getVar('judul_artikel'),
        ];
        $artikel_model->update($id, $data);
        $response = [
            'status' => 200,
            'error' => null,
            'message' => [
                'success' => 'Artikel berhasil diupdate',
                'data' => $data
            ]
        ];
        return $this->respond($response);
    }

   
}