<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\ProjectModel;
use App\Models\AktorModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
            'title' => 'Dashboard | Project Management File',
            'project' => $this->projectModel->getProject()
        ];
        return view('pages/dashboard', $data);
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

    # Save Projek
    public function save()
    {
        if ($this->request->isAJAX()) {

            #PROJEK
            $data = [
                'nama' => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ];

            $this->projectModel->insert($data);

            $id_Project = $this->projectModel->insertID();


            #AKTOR
            $aktor = $this->request->getPost('aktor');

            $jmldata = count($aktor);

            for ($i = 0; $i < $jmldata; $i++) {
                $this->aktorModel->insert([
                    'id_project' => $id_Project,
                    'aktor' => $aktor[$i]
                ]);
            }

            $msg = [
                'sukses' => "Project saved successfully."
            ];
            echo json_encode($msg);
        }
    }











    //--------------------------------------------------------------------

}
