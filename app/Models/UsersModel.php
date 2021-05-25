<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'tbs_cms_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'role', 'name', 'last_login', 'active', 'created_at', 'updated_at'];
}
