<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArtikelModel;

class ArtikelController extends ResourceController
{
    protected $modelName = 'App\Models\ArtikelModel';
    protected $format    = 'json';

    public function index()
    {
        $data = [
            'detail_artikel' => $this->model->orderBy('id_artikel', 'ASC')->paginate(10),
            'pager' => $this->model->pager,

        ];

        return view('artikel/artikel_view', $data);
    }

    public function add_form()
    {
        return view('artikel/add_form');
    }

    
    public function edit_form($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Article not found');
        }
        // return $this->respond($data);
        return view('artikel/edit_form', $data);
    }

    public function create()
    {
        $data = [
            'id_artikel' => $this->request->getPost('id_artikel'),
            'judul_artikel' => $this->request->getPost('judul_artikel'),
        ];
        $this->model->insert($data);
        return redirect()->to('/dashboard/artikel');
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
            'id_artikel' => $this->request->getPost('id_artikel'),
            'judul_artikel' => $this->request->getPost('judul_artikel'),
        ];
        $this->model->update($id, $data);
        // return $this->respond($data);
        return redirect()->to('/dashboard/artikel');
    }

    public function delete($id = null)
    {
        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Article not found');
        }
        $this->model->delete($id);
        // return $this->respondDeleted($data);
        return redirect()->to('/dashboard/artikel');
    }
}