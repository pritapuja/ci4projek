<?php

namespace App\Models;

use CodeIgniter\Model;

class HeaderModel extends Model
{
    protected $table = 'header';
    protected $allowedFields = ['id_header', 'id_dfs', 'id_request_param', 'id_request_body', 'header', 'tipe3'];

    public function getHeader($header = false)
    {
        if ($header === false) {
            return $this->find();
        }
        return $this->where(['$header' => $header]);
    }
}
