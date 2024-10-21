<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'detail_artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_artikel', 'judul_artikel'];

    //get all artikel data
    public function getArtikel($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id_artikel' => $id]);
        }
    }

    //insert artikel data
    public function insertArtikel($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
   
}


