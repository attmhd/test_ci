<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArtikelModel;

class Dashboard extends ResourceController
{
    protected $modelName = 'App\Models\ArtikelModel';
    protected $format    = 'json';

    public function index()
    {
        //tampilkan data dengan paginate 10
        $data = [
            'detail_artikel' => $this->model->paginate(10),
            'pager' => $this->model->pager
        ];

        
        return view('dashboard_view', $data);
    }

    public function create()
    {
        $data = [
            'id_artikel' => $this->request->getPost('id_artikel'),
            'judul_artikel' => $this->request->getPost('judul_artikel'),
        ];
        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Article not found');
        }
        return $this->respond($data);
    }

    public function update($id = null)
    {
        $data = [
            'title' => $this->request->getRawInput('title'),
            'content' => $this->request->getRawInput('content'),
            'author' => $this->request->getRawInput('author'),
        ];
        $this->model->update($id, $data);
        return $this->respond($data);
    }

    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Article not found');
        }
        $this->model->delete($id);
        return $this->respondDeleted($data);
    }
}