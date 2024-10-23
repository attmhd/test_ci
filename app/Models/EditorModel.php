<?php   

namespace App\Models;

use CodeIgniter\Model;

class EditorModel extends Model
{
    protected $table = 'editor';
    protected $primaryKey = 'id_editor';
    protected $allowedFields = ['id_editor', 'nama_editor'];
   
}