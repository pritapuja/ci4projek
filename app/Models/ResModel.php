<?php

namespace App\Models;

use CodeIgniter\Model;

class ResModel extends Model
{
    protected $table = 'res';
    protected $allowedFields = ['id_res', 'id_dfs', 'id_request_param', 'id_request_body', 'id_header', 'res', 'tipe4'];
}
