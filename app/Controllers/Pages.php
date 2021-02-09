<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ProjectModel;
use App\Models\AktorModel;
use App\Models\UsecaseModel;
use App\Models\DfsModel;
use App\Models\RequestparamModel;
use App\Models\RequestbodyModel;
use App\Models\HeaderModel;
use App\Models\ResModel;
use App\Models\DataobjectModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pages extends BaseController
{

    public $projectModel;
    public $aktorModel;
    public $usecaseModel;
    public $dfsModel;
    public $paramModel;
    public $bodyModel;
    public $headerModel;
    public $resModel;
    public $dataobjectModel;


    public function __construct()
    {
        $this->projectModel     = new ProjectModel();
        $this->aktorModel       = new AktorModel();
        $this->usecaseModel     = new UsecaseModel();
        $this->dfsModel         = new DfsModel();
        $this->paramModel       = new RequestparamModel();
        $this->bodyModel        = new RequestbodyModel();
        $this->headerModel      = new HeaderModel();
        $this->resModel         = new ResModel();
        $this->dataobjectModel  = new DataobjectModel();
    }

    public function index()
    {
        $keywoard = $this->request->getVar('keywoard');
        if ($keywoard) {
            $this->projectModel->search($keywoard);
        } else {
            $this->projectModel;
        }

        $data = [
            'title'         => 'Dashboard | Digital Creative Management',
            'project'       => $this->projectModel->getProject(),
            'hitungNama'    => $this->projectModel->hitungNama()
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
            'title' => 'Project Details',
            'aktor' => $this->aktorModel->getNama()
        ];

        return view('pages/formactor', $data);
    }

    public function formtambah()
    {
        if ($this->request->isAJAX()) {
            $msg = [
                'data' => view('pages/modaltambah')
            ];

            echo json_encode($msg);
        }
    }


    public function excel()
    {
        $data = [
            'title' => 'Export Excel'
        ];
        return view('pages/excel', $data);
    }

    # Save Projek
    public function save()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();

            $valid = $this->validate([
                'nama' => [
                    'label' => 'Project name',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} can not be empty'
                    ]
                ]
            ]);

            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama' => $validation->getError('nama'),

                    ]
                ];
            } else {
                #PROJEK
                $data = [
                    'nama'      => $this->request->getPost('nama'),
                    'deskripsi' => $this->request->getPost('deskripsi')
                ];

                $this->projectModel->insert($data);

                $id_Project = $this->projectModel->insertID();


                #AKTOR
                $aktor = $this->request->getPost('aktor');

                $jmldata = count($aktor);

                for ($i = 0; $i < $jmldata; $i++) {
                    $this->aktorModel->insert([
                        'id_project'    => $id_Project,
                        'aktor'         => $aktor[$i]
                    ]);
                }

                $msg = [
                    'sukses' => "Project saved successfully.",
                    'id_project' => $id_Project,
                    'nama'
                ];
            }
            echo json_encode($msg);
        } else {
            exit('sorry can not be processed');
        }
    }


    #save DFS

    public function savedfs()
    {
        if ($this->request->isAJAX()) {
            // $id_Projek          = $this->projectModel->insertID();
            // $id_aktor           = $this->aktorModel->InsertID();

            $usecase            = $this->request->getPost('usecase');
            $tahapan            = $this->request->getPost('tahapan');

            $base_url           = $this->request->getPost('base_url');
            $pattern            = $this->request->getPost('pattern');
            $type               = $this->request->getPost('type');
            $request_param      = $this->request->getPost('request_param');
            $request_body       = $this->request->getPost('request_body');
            $header             = $this->request->getPost('header');
            $res                = $this->request->getPost('res');
            $data_object        = $this->request->getPost('data_object');
            $tipe1              = $this->request->getPost('tipe1');
            $tipe2              = $this->request->getPost('tipe2');
            $tipe3              = $this->request->getPost('tipe3');
            $tipe4              = $this->request->getPost('tipe4');
            $tipe5              = $this->request->getPost('tipe5');

            $function_query     = $this->request->getPost('function_query');
            $base_query         = $this->request->getPost('base_query');

            $j1 = count($usecase);

            for ($i = 0; $i < $j1; $i++) {
                $this->usecaseModel->insert([
                    'usecase'       => $usecase[$i],
                    'tahapan'       => $tahapan[$i]
                ]);
            }
            // dd($j1);

            // $id_case            = $this->usecaseModel->InsertID();

            $j2 = count($base_url);

            for ($i = 0; $i < $j2; $i++) {
                $this->dfsModel->insert([
                    // 'id_case'           => $id_case,
                    'base_url'          => $base_url[$i],
                    'pattern'           => $pattern[$i],
                    'type'              => $type[$i],
                    'function_query'    => $function_query[$i],
                    'base_query'        => $base_query[$i]
                ]);
            }

            // $id_dfs             = $this->paramModel->insertID();

            $j3 = count($request_param);

            for ($i = 0; $i < $j3; $i++) {
                $this->paramModel->insert([
                    // 'id_dfs'        => $id_dfs,
                    'request_param' => $request_param[$i],
                    'tipe1'         => $tipe1[$i],
                ]);
            }
            // dd($j3);

            // $id_request_param   = $this->paramModel->insertID();

            $j4 = count($request_body);

            for ($i = 0; $i < $j4; $i++) {
                $this->bodyModel->insert([
                    // 'id_dfs'            => $id_dfs,
                    // 'id_request_param'  => $id_request_param,
                    'request_body'      => $request_body[$i],
                    'tipe2'             => $tipe2[$i]
                ]);
            }
            // dd($j4);

            // $id_request_body    = $this->headerModel->insertID();

            $j5 = count($header);

            for ($i = 0; $i < $j5; $i++) {
                $this->headerModel->insert([
                    // 'id_dfs'                => $id_dfs,
                    // 'id_request_param'      => $id_request_param,
                    // 'id_request_body'       => $id_request_body,
                    'header'                => $header[$i],
                    'tipe3'                 => $tipe3[$i]
                ]);
            }
            // dd($j5);

            // $id_header          = $this->headerModel->insertID();

            $j6 = count($res);

            for ($i = 0; $i < $j6; $i++) {
                $this->resModel->insert([
                    // 'id_dfs'            => $id_dfs,
                    // 'id_request_param'  => $id_request_param,
                    // 'id_request_body'   => $id_request_body,
                    // 'id_header'         => $id_header,
                    'res'               => $res[$i],
                    'tipe4'             => $tipe4
                ]);
            }

            // $id_res             = $this->resModel->insertID();

            $j7 = count($data_object);

            for ($i = 0; $i < $j7; $i++) {
                $this->dataobjectModel->insert([
                    // 'id_dfs'            => $id_dfs,
                    // 'id_request_param'  => $id_request_param,
                    // 'id_request_body'   => $id_request_body,
                    // 'id_header'         => $id_header,
                    // 'id_res'            => $id_res,
                    'data_object'       => $data_object[$i],
                    'tipe5'             => $tipe5[$i]
                ]);
            }

            $msg = [
                'sukses' => "Project saved successfully."
            ];
            echo json_encode($msg);
        }
    }

    public function projek_excel()
    {
        $dataprojek = $this->projectModel->findAll();
        $dataAktor = $this->aktorModel->findAll();

        $spreadsheet = new Spreadsheet();

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'Nama Projek')
            ->setCellValue('C1', 'Deskripsi');

        $column = 2;
        // tulis data mobil ke cell
        foreach ($dataprojek as $data) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $data['id_project'])
                ->setCellValue('B' . $column, $data['nama'])
                ->setCellValue('C' . $column, $data['deskripsi']);
            $column++;
        }

        $spreadsheet->setActiveSheetIndex(0)->setTitle('Projek');

        $spreadsheet->createSheet();

        $spreadsheet->setActiveSheetIndex(1)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'Aktor');

        $i = 2;
        // tulis data mobil ke cell
        foreach ($dataAktor as $d) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $column, $d['id_aktor'])
                ->setCellValue('B' . $column, $d['aktor']);
            $i++;
        }

        $spreadsheet->setActiveSheetIndex(1)->setTitle('Aktor');


        // tulis dalam format .xlsx
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Projek';

        // Redirect hasil generate xlsx ke web client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    //--------------------------------------------------------------------

}
