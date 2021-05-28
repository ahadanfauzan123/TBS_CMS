<?php


namespace App\Controllers;

use App\Models\EditAccessModel;
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
        $editAccessModel = new EditAccessModel();
        $data["users"] = $editAccessModel->findAll();
        d($editAccessModel->findAll());
        return view('menu/accessRole', $data);
    }
    public function add()
    {
        return view('menu/add');
    }
    public function save()
    {
        $editAccessModel = new EditAccessModel();
        $editAccessModel->save([
            'UserName' => $this->request->getVar("TypeName"),
            'GroupID' => $this->request->getVar("GroupId"),
        ]);
        return $this->response->redirect(site_url('user/access'));
    }
    public function delete($UserName)
    {
        $editAccessModel = new EditAccessModel();
        $editAccessModel->delete($UserName);
        return $this->response->redirect(site_url('user/access'));
    }
    public function edit($UserName)
    {
        $editAccessModel = new EditAccessModel();
        $data['user'] = $editAccessModel->find($UserName);
        return view('menu/edit', $data);
    }
    public function update($UserName)
    {
        $editAccessModel = new EditAccessModel();
        $editAccessModel->save([
            'UserName' => $this->request->getVar("TypeName"),
            'GroupID' => $this->request->getVar("GroupId"),
        ]);
        return $this->response->redirect(site_url('user/access'));
    }
}
