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
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('hometemplate/add', $data);
    }
    public function save()
    {
        $mainModel = new MainModel();
        // $mainModel->insert($_POST);
        if (!$this->validate([
            "IconMenu" => [
                "rules" => 'uploaded[IconMenu]|max_size[IconMenu,5120]|is_image[IconMenu]|mime_in[IconMenu,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Ooops, gambar harus diisi',
                    'max_size' => 'Ooops, ukuran gambar terlalu besar',
                    'is_image' => 'Ooops, file yang anda kirim bukan gambar',
                    'mime_in' => 'Ooops, file yang anda kirim bukan gambar',

                ]
            ]
        ])) {
            return redirect()->to('/role/add')->withInput();
        } elseif ($IconMenuFile = $this->request->getFiles('IconMenu')) {
            foreach ($IconMenuFile as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $NewName = $img->getRandomName();
                    $img->move('img/iconmenu_image', $NewName);
                }
            }
        }
        $mainModel->save([
            'MenuName' => $this->request->getVar("MenuName"),
            'IconMenu' => $NewName,
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
    public function view($id)
    {
        $mainModel = new MainModel();
        $data['view'] = $mainModel->find($id);
        // d($mainModel->find($id));
        return view('hometemplate/view', $data);
    }
}
