<?php 

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\EditorModel;

class EditorController extends Controller{
    
        protected $modelName = 'App\Models\EditorModel';
        protected $format = 'json';
    
        public function index()
        {
            $data = [
                'detail_editor' => $this->model->orderBy('id_editor', 'ASC')->paginate(10),
                'pager' => $this->model->pager,
    
            ];
    
            return view('dashboard_view', $data);
        }
    
        public function add_form()
        {
            return view('add_form');
        }
    
        public function edit_form()
        {
            return view('edit_form');
        }
    
        public function create()
        {
            $data = [
                'id_editor' => $this->request->getPost('id_editor'),
                'nama_editor' => $this->request->getPost('nama_editor'),
            ];
            $this->model->insert($data);
            return redirect()->to('/dashboard');
        }
    
        public function show($id = null)
        {
            $data = $this->model->find($id);
            if (!$data) {
                return $this->failNotFound('Editor not found');
            }
            return $this->respond($data);
        }
    
        public function update($id = null)
        {
            $data = [
                'nama_editor' => $this->request->getRawInput('nama_editor'),
            ];
            $this->model->update($id, $data);
            return $this->respond($data);
        }
}