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
        return $this->where(['id_project' => $id]);
    }

    public function hitungNama($nama = false)
    {
        if ($nama === false) {
            return $this->countAllResults();
        }
        return $this->where(['nama' => $nama]);
    }

    public function search($keywoard)
    {
        return $this->table('project')->like('nama', $keywoard);
    }
}
