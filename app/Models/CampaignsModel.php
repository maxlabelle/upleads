<?php

namespace App\Models;

use CodeIgniter\Model;

class CampaignsModel extends BasicModel
{
    protected $table = "campaigns";

    public function getPrograms($userId) {
      $builder = $this->db->table($this->table);
      $builder->select("{$this->table}.id, {$this->table}.name, {$this->table}.status, settings.merchant_name, users_programs.status AS userStatus");
      $builder->join('users_programs', "users_programs.user_id = '{$userId}' AND users_programs.campaign_id = {$this->table}.id", "left");
      $builder->join('settings', "settings.user_id = {$this->table}.user_id", "left");
      $builder->where(["{$this->table}.status"=>'Active']);
      $query = $builder->get();
      return $query;
    }
    public function getLinks($userId) {
      $builder = $this->db->table('users_programs_links');
      $builder->select("users_programs_links.id, users_programs_links.user_id, campaigns.name, settings.merchant_name");
      $builder->join('campaigns', "campaigns.id = users_programs_links.campaign_id", "left");
      $builder->join('settings', "settings.user_id = campaigns.user_id", "left");
      $builder->where(["users_programs_links.user_id"=>$userId]);
      $query = $builder->get();
      // echo $this->db->getLastQuery();die();
      return $query;
    }
}
