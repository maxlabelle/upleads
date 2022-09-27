<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends BasicModel
{
    protected $table = "users";

    public function setRole($userId, $role, $value = false) {
      $user = $this->getWhereSingle(['id'=>$userId]);
      $roles = [];
      if (!empty($user->roles)) {
        $roles = @json_decode($user->roles, true);
        if (!is_array($roles)) {
          $roles = [];
        }
      }

      $roles[$role]=$value;

      $this->edit($userId,['roles'=>json_encode($roles)]);
    }
    public function hasRole($userId, $role) {
      $user = $this->getWhereSingle(['id'=>$userId]);
      return hasRole($user->roles, $role);
    }
}
