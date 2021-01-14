<?php

namespace App\Models;

use CodeIgniter\Model;

class AktorModel extends Model
{
    protected $table = 'aktor';
    protected $allowedFields = ['id_aktor', 'id_project', 'aktor'];

    public function getAktor($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id_aktor' => $id])->first();
    } #endgetAktor
}
