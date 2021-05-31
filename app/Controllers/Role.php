<?php

namespace App\Controllers;

use App\Models\MainModel;

class Role extends BaseController
{
    public function index()
    {
        $mainModel = new MainModel();
        $data['menu'] = $mainModel->findAll();
        // d($mainModel->findAll());

        return view('hometemplate/index', $data);
    }
    // public function menutemplate()
    // {
    //     $mainModel = new MainModel();
    //     $data['database'] = $mainModel->findAll();
    //     return view('hometemplate/menu', $data);
    // }
    public function add()
    {

        return view('hometemplate/add');
    }
    public function save()
    {
        $mainModel = new MainModel();
        // $mainModel->insert($_POST);
        $mainModel->save([
            'MenuName' => $this->request->getVar("MenuName"),
            'IconMenu' => $this->request->getVar("IconMenu"),
            'description' => $this->request->getVar("deskripsi"),
            'UrlMenu' => $this->request->getVar("UrlMenu")

        ]);
        return $this->response->redirect(site_url('/'));
    }
    public function delete($IdMenu)
    {
        $mainModel = new MainModel();
        $mainModel->delete($IdMenu);
        return $this->response->redirect(site_url('/'));
    }
    public function edit($IdMenu)
    {
        $mainModel = new MainModel();
        $data['menu'] = $mainModel->find($IdMenu);
        return view('hometemplate/edit', $data);
    }
    public function update($id)
    {
        $mainModel = new MainModel();
        // $mainModel->insert($_POST);
        $mainModel->save([
            'IdMenu' => $id,
            'MenuName' => $this->request->getVar("MenuName"),
            'IconMenu' => $this->request->getVar("IconMenu"),
            'description' => $this->request->getVar("deskripsi"),
            'UrlMenu' => $this->request->getVar("UrlMenu")

        ]);
        return $this->response->redirect(site_url('/'));
        // $mainModel->update($_POST["id"], $_POST);
        // return $this->response->redirect(site_url('role/index'));
    }
    public function view()
    {
        return view('hometemplate/view');
    }
}
