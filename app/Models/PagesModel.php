<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends BasicModel
{
    protected $table = "pages";

    public function slugExists($userId, $slug) {
      return $this->exists('user_id', $userId, 'page_name', $slug);
    }
}
