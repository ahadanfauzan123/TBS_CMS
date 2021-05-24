<?php


namespace App\Controllers;

use App\Models\UsersModel;

class User extends BaseController

{
    public function index()
    {

        return view('user/index');
    }
    public function accessRole()
    {
        $usersModel = new UsersModel();
        $data["data"] = $usersModel->findAll();
        // d($usersModel->findAll());
        return view('menu/users', $data);
    }
    public function access()
    {
        return view('menu/accessRole');
    }
}
