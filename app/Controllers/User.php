<?php

namespace App\Controllers;

use App\Models\UserModelCode;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController
{
    use ResponseTrait;
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModelCode();
    }

    public function index()
    {
        $data['title'] = 'User page';

        return view('user/index', $data);
    }



    public function edit($username)
    {
        $data = [
            'title' => 'Form Ubah Data Profil Diri',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getUser($username)
        ];

        return view('user/edit', $data);
    }

    public function update($username)
    {
        $this->userModel->save([
            'id'    => user()->id,
            'username' => '',
            'email' => '',
            'fullname' => '',
            'address' => $this->request->getVar('address'),
        ]);

        $this->userModel->save([
            'id'    => user()->id,
            'username' => $username,
            'email' => $this->request->getVar('email'),
            'fullname' => $this->request->getVar('fullname'),
            'address' => $this->request->getVar('address'),
        ]);


        // $data = [
        //     'username' => $username,
        //     'email' => $this->request->getVar('email'),
        //     'fullname' => $this->request->getVar('fullname'),
        //     'address' => $this->request->getVar('address'),
        // ];

        // $this->userModel->save($data);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/user');
    }
}
