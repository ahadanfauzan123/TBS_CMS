<?php


namespace App\Controllers;

use App\Models\EditAccessModel;
use App\Models\UsersModel;

class User extends BaseController

{
    protected $editAccesModel;
    public function __construct()
    {
        $this->editAccessModel = new EditAccessModel();
    }
    public function index()
    {

        return view('userprofile/index');
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
        // $editAccessModel = new EditAccessModel();
        $data["users"] = $this->editAccessModel->findAll();
        // d($this->editAccessModel->findAll());
        return view('menu/accessRole', $data);
    }
    public function add()
    {
        return view('menu/add');
    }
    public function save()
    {
        // $editAccessModel = new EditAccessModel();
        $this->editAccessModel->save([
            'typeName' => $this->request->getVar("TypeName"),
            'groupId' => $this->request->getVar("GroupId"),
        ]);
        return $this->response->redirect(site_url('user/access'));
    }
    public function delete($id)
    {
        // $editAccessModel = new EditAccessModel();
        $this->editAccessModel->delete($id);
        return $this->response->redirect(site_url('user/access'));
    }
    public function edit($id)
    {
        // $editAccessModel = new EditAccessModel();
        $data['user'] = $this->editAccessModel->find($id);
        return view('menu/edit', $data);
    }
    public function update($id)
    {
        // $editAccessModel = new EditAccessModel();
        $this->editAccessModel->save([
            'id' => $id,
            'typeName' => $this->request->getVar("TypeName"),
            'groupId' => $this->request->getVar("GroupId"),
        ]);
        return $this->response->redirect(site_url('user/access'));
    }
}
