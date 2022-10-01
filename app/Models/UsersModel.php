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
    public function programs($userId) {
      return $this->db->table("users_programs")->getWhere(["user_id"=>$userId]);
    }
    public function join($userId, $campaignId) {
      $query = $this->db->table("campaigns")->getWhere(["id"=>$campaignId]);
      $campaign = $query->getRow();
      $this->db->table("users_programs")->insert([
        'id' => uid(),
        'user_id' => $userId,
        'campaign_id' => $campaignId,
        'status' => ($campaign->affiliateApproval=='Automatic') ? 'Approved' : 'Pending',
      ]);
    }

    public function hasRole($userId, $role) {
      $user = $this->getWhereSingle(['id'=>$userId]);
      return hasRole($user->roles, $role);
    }
}
