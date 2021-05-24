<?php

namespace App\Models;

use CodeIgniter\Model;

class MainModel extends Model
{
    protected $table = 'tbs_cms_menus';
    protected $primaryKey = 'IdMenu';
    protected $allowedFields = ['IdMenu', 'MenuName', 'IconMenu', 'description', 'UrlMenu'];
}
