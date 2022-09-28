<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends BasicModel
{
    protected $table = "settings";

    public function slugExists($userId, $slug) {
      $settings = $this->getWhere([]);
      $found = false;
      foreach($settings->getResult() as $row) {
        if ($row->user_id != $userId) {
          if ($row->merchant_url_slug === $slug) {
            $found = true;
            break;
          }
        }
      }
      return $found;
    }

    public function getConfig($userId) {
      $settings = $this->getWhereSingle(['user_id'=>$userId]);

      $config = [];
      if (!empty($settings->config)) {
        $config = @json_decode($settings->config, true);
        if (!is_array($config)) {
          $config = [];
        }
      }
      return $config;
    }

    public function setValue($userId, $key, $value) {
      if (!$this->getWhereSingle(['user_id'=>$userId])) {
        $this->create([
          'id' => uid(),
          'user_id' => $userId,
          'config' => json_encode([]),
        ]);
      }

      $config = $this->getConfig($userId);

      $config[$key]=$value;

      $this->edit(['user_id'=>$userId],['config'=>json_encode($config)]);
    }

}
