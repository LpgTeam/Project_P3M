<?php

namespace App\Controllers;

use App\Models\UserModelCode;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PenelitianModel;


class PKM extends BaseController
{
    use ResponseTrait;
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModelCode();
    }

    public function index()
    {

        //model initialize
        $penelitianModel = new PenelitianModel();

        //pager initialize
        $pager = \Config\Services::pager();

        $data = array(
            // 'posts' => $postModel->paginate(2, 'post'),
            'penelitian' => $penelitianModel->paginate(500),
            // 'pager' => $postModel->pager
        );


        $data['title'] = 'Pengabdian Kepada Masyarakat';


        return view('pkm/index', $data);
    }
}
