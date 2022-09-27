<?php

namespace App\Models;

use CodeIgniter\Model;

class BasicModel extends Model
{
    public function getWhere($data) {
      return $this->db->table($this->table)->getWhere($data);
    }

    public function getWhereSingle($data) {
      $query = $this->db->table($this->table)->getWhere($data);
      if ($query->getNumRows()) {
        return $query->getRow();
      } else {
        return false;
      }
    }

    public function remove($data) {
      $this->db->table($this->table)->delete($data);
    }

    public function create($data) {
      $this->db->table($this->table)->insert($data);
      return $this->db->insertID();
    }

    public function edit($needle, $data) {
      if (is_array($needle)) {
        return $this->db->table($this->table)->where($needle)->update($data);
      } else {
        return $this->db->table($this->table)->where('id', $needle)->update($data);
      }
    }
}
