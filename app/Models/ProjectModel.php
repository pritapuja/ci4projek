<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
    protected $allowedFields = ['id_project', 'id', 'nama', 'deskripsi'];

    public function getProject($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id_project' => $id])->first();
    } #endgetProject

}
