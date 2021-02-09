<?php

namespace App\Models;

use CodeIgniter\Model;

class DfsModel extends Model
{
    protected $table = 'dataflow_structure';
    protected $allowedFields = ['id_dfs', 'id_project', 'id_aktor', 'id_case', 'base_url', 'pattern', 'type', 'function_query', 'base_query'];

    public function getBase($base_url = false)
    {
        if ($base_url === false) {
            return $this->find();
        }
        return $this->where(['base_url' => $base_url]);
    }

    public function getPattern($pattern = false)
    {
        if ($pattern === false) {
            return $this->find();
        }
        return $this->where(['pattern' => $pattern]);
    }

    public function getType($type = false)
    {
        if ($type === false) {
            return $this->find();
        }
        return $this->where(['type' => $type]);
    }

    public function getFquery($function_query = false)
    {
        if ($function_query === false) {
            return $this->find();
        }
        return $this->where(['function_query' => $function_query]);
    }

    public function getBquery($base_query = false)
    {
        if ($base_query === false) {
            return $this->find();
        }
        return $this->where(['base_query' => $base_query]);
    }
}
