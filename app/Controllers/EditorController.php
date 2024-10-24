<?php 

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\EditorModel;

class EditorController extends ResourceController{
    
        protected $modelName = 'App\Models\EditorModel';
        protected $format = 'json';
    
        public function index()
        {
            $data = [
                'detail_editor' => $this->model->orderBy('id_editor', 'ASC')->paginate(5),
                'pager' => $this->model->pager,
    
            ];

            // return $this->respond($data);
    
            return view('editor/editor_view', $data);
        }
    
        public function add_form()
        {
            return view('editor/add_form');
        }
    
        // edit form
        public function edit_form($id = null)
        {
            $data = $this->model->find($id);
            if (!$data) {
                return $this->failNotFound('Editor not found');
            }
            return view('editor/edit_form', $data);
        }
    
        public function create()
        {
            $data = [
                'id_editor' => $this->request->getPost('id_editor'),
                'nama_editor' => $this->request->getPost('nama_editor'),
            ];
            $this->model->insert($data);
            //flash message
            session()->setFlashdata('message', 'Editor berhasil ditambahkan');
            return redirect()->to('/dashboard/editor');
        }
    
       
        public function update($id = null)
        {
            $data = [
                // 'id_editor' => $this->request->getPost('id_editor'),
                'nama_editor' => $this->request->getPost('nama_editor'),
            ];
            $this->model->update($id, $data);
            //flash message
            session()->setFlashdata('message', 'Editor berhasil diubah');
            return redirect()->to('/dashboard/editor');
        }

        public function delete($id = null)
        {
            $data = $this->model->find($id);
            if($data){
                $this->model->delete($id);
                //flash message
                session()->setFlashdata('message', 'Editor berhasil dihapus');
                return redirect()->to('/dashboard/editor');
            }else{
                return $this->failNotFound('Editor not found');
            }
        }
}