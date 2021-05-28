<?php

namespace App\Models;

use CodeIgniter\Model;

class EditAccessModel extends Model
{
    protected $table = 'tbs_cms_ugmembers';
    // protected $primaryKey = 'UserName';
    protected $primaryKeys = ['UserName', 'GroupID'];
    protected $allowedFields = ['UserName', 'GroupID'];
}
