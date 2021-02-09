<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestbodyModel extends Model
{
    protected $table = 'request_body';
    protected $allowedFields = ['id_request_body', 'id_dfs', 'id_request_param', 'request_body', 'tipe2'];
}
