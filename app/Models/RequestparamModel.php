<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestparamModel extends Model
{
    protected $table = 'request_param';
    protected $allowedFields = ['id_request_param', 'id_dfs', 'request_param', 'tipe1'];
}
