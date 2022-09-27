<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsModel extends BasicModel
{
    protected $table = "settings";

    public function slugExists($userId, $slug) {
      $_settings = $this->getWhere([]);
      foreach($_settings->getResult() as $row) {
        print_r($row);
      }
      die();
    }

    public function getSettings($userId) {
      $_settings = $this->getWhereSingle(['user_id'=>$userId]);

      $settings = [];
      if (!empty($_settings->settings)) {
        $settings = @json_decode($_settings->settings, true);
        if (!is_array($settings)) {
          $settings = [];
        }
      }
      return $settings;
    }

    public function setValue($userId, $key, $value) {
      if (!$this->getWhereSingle(['user_id'=>$userId])) {
        $this->create([
          'id' => uid(),
          'user_id' => $userId,
          'settings' => json_encode([]),
        ]);
      }

      $settings = $this->getSettings($userId);

      $settings[$key]=$value;

      $this->edit(['user_id'=>$userId],['settings'=>json_encode($settings)]);
    }

}
