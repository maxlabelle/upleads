<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends BasicModel
{
    protected $table = "settings";

    public function slugExists($userId, $slug) {
      return $this->exists('user_id', $userId, 'merchant_url_slug', $slug);
    }

    public function domainExists($userId, $domain) {
      return $this->exists('user_id', $userId, 'merchant_domain', $domain);
    }

}
