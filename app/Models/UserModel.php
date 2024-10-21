<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'iduser';
    protected $allowedFields = [ 'iduser','namauser','username', 'password', 'level'];
}