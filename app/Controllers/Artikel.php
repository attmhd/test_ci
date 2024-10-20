<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ArtikelModel;

class Artikel extends ResourceController
{
 

    public function index()
    {
        $artikel_model = new ArtikelModel();
        $data = $artikel_model->findAll();
        return $this->respond($data, 200);

        
    }

    public function create()
    {
        $data = $this->request->getPost();

        if ($this->model->insert($data) === false) {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated($data);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);

        if (!$data) {
            return $this->failNotFound('Data not found with id ' . $id);
        }

        return $this->respond($data);
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();

        if ($this->model->update($id, $data) === false) {
            return $this->fail($this->model->errors());
        }

        return $this->respondUpdated($data);
    }

    public function delete($id = null)
    {
        $data = $this->model->find($id);

        if ($data === null) {
            return $this->failNotFound('Data not found with id ' . $id);
        }

        if ($this->model->delete($id) === false) {
            return $this->fail($this->model->errors());
        }

        return $this->respondDeleted($data);
    }
}