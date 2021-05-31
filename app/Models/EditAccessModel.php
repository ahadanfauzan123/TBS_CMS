<?php

namespace App\Models;

use CodeIgniter\Model;

class EditAccessModel extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';
    // protected $primaryKeys = ['UserName', 'GroupID'];
    protected $allowedFields = ['id', 'typeName', 'groupId'];
}
