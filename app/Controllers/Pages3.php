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
            'title'     => 'Dashboard | Digital Creative Management',
            'project'   => $this->projectModel->getProject(),
            'hitung'    => $this->projectModel->hitung()
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
            'aktor' => $this->aktorModel->getAktor()
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
                'sukses' => "Project saved successfully."
            ];
            echo json_encode($msg);
        }
    }


    #save DFS

    public function savedfs()
    {
        if ($this->request->isAJAX()) {
            $id_project          = $this->projectModel->insertID();
            $id_aktor           = $this->aktorModel->InsertID();

            $usecase            = $this->request->getPost('usecase');
            $tahapan            = $this->request->getPost('tahapan');



            $j1 = count($usecase);

            for ($i = 0; $i < $j1; $i++) {
                $this->usecaseModel->insert([
                    'id_project'    => $id_project,
                    'id_aktor'      => $id_aktor,
                    'usecase'       => $usecase[$i],
                    'tahapan'       => $tahapan[$i]
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
