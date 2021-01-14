<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\AktorModel;

class Pages extends BaseController
{

    public $projectModel;
    public $aktorModel;


    public function __construct()
    {
        $this->projectModel = new ProjectModel();
        $this->aktorModel = new AktorModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Project Management File'
        ];
        return view('pages/dashboard', $data);
    }

    public function createproject()
    {
        $data = [
            'title' => 'Create Project'
        ];
        return view('pages/createproject', $data);
    }

    public function formactor()
    {
        $data = [
            'title' => 'Sistem Login'
        ];
        return view('pages/formactor', $data);
    }

    #save tutor unpas
    // public function save()
    // {
    //     $this->projectModel->save([
    //         'nama' => $this->request->getPost('nama'),
    //         'deskripsi' => $this->request->getPost('deskripsi')
    //     ]);


    //     return redirect()->to('/pages/formactor');
    // }

    #save ajax
    // public function save()
    // {
    //     if ($this->request->isAJAX()) {
    //         $save = [
    //             'nama' => $this->request->getPost('nama'),
    //             'deskripsi' => $this->request->getPost('deskripsi')
    //         ];

    //         $this->projectModel->insert($save);

    //         $msg = [
    //             'sukses' => "Project saved successfully."
    //         ];
    //         echo json_encode($msg);
    //     }
    // }











    //--------------------------------------------------------------------

}
