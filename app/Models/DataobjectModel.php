<?php

namespace App\Models;

use CodeIgniter\Model;

class DataobjectModel extends Model
{
    protected $table = 'data_object';
    protected $allowedFields = ['id_dataobject', 'id_dfs', 'id_request_param', 'id_request_body', 'id_header', 'id_res', 'data_object', 'tipe5'];

    public function getData($data_object = false)
    {
        if ($data_object === false) {
            return $this->find();
        }
        return $this->where(['data_object' => $data_object]);
    }

    public function getTipe5($tipe5 = false)
    {
        if ($tipe5 === false) {
            return $this->find();
        }
        return $this->where(['$tipe5' => $tipe5]);
    }
}
