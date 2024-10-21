<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'detail_artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['id_artikel', 'judul_artikel'];
   
}


