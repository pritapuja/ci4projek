<?php

namespace App\Models;

use CodeIgniter\Model;

class UsecaseModel extends Model
{
    protected $table = 'cases';
    protected $allowedFields = ['id_case', 'id_project', 'id_aktor', 'usecase', 'tahapan'];

    public function getCase($usecase = false)
    {
        if ($usecase === false) {
            return $this->find();
        }
        return $this->where(['usecase' => $usecase]);
    }
}
