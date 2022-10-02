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

    public function trackingTagIdExists($id) {
      return $this->exists('tracking_tag_id', $id, 'tracking_tag_id', $id);
    }

    public function affiliateLinkIdExists($id) {
      return $this->exists('affiliate_link_id', $id, 'affiliate_link_id', $id, [], 'users_programs_links');
    }

    public function getJoinedPrograms($userId) {
      $builder = $this->db->table($this->table);
      $builder->select("campaigns.id, campaigns.name, campaigns.status, settings.merchant_name, users_programs.status AS userStatus");
      $builder->join('users_programs', "users_programs.user_id = '{$userId}' AND users_programs.campaign_id = {$this->table}.id", "left");
      $builder->join('settings', "settings.user_id = campaigns.user_id", "left");
      $builder->where(["campaigns.status"=>'Active']);
      $builder->where(["users_programs.status"=>'Approved']);
      $query = $builder->get();
      return $query;
    }

    public function linkClick($linkId) {
      $this->db->table("users_programs_links_clicks")->insert([
        'id'=>uid(),
        'link_id'=>$linkId,
        'timestamp'=>time(),
        'details' => json_encode($_SERVER),
      ]);
    }

    public function getLinkData($affiliateLinkId) {
      $builder = $this->db->table($this->table);
      $builder->select("campaigns.id, campaigns.name, campaigns.item_url, campaigns.status, settings.merchant_name, users_programs.status AS userStatus, users_programs_links.id AS link_id");
      $builder->join('users_programs', "users_programs.campaign_id = {$this->table}.id", "left");
      $builder->join('users_programs_links', "users_programs_links.campaign_id = {$this->table}.id", "left");
      $builder->join('settings', "settings.user_id = campaigns.user_id", "left");
      $builder->where(["campaigns.status"=>'Active']);
      $builder->where(["users_programs.status"=>'Approved']);
      $builder->where(["users_programs_links.affiliate_link_id"=>$affiliateLinkId]);
      $query = $builder->get();
      if ($query->getNumRows()) {
        return $query->getRow();
      } else {
        return false;
      }
    }

    public function deleteLink($userId, $linkId) {
      $this->db->table("users_programs_links")->delete(['id'=>$linkId,'user_id'=>$userId]);
    }

    public function createLink($data) {
      $this->db->table("users_programs_links")->insert($data);
    }

    public function getLinks($userId) {
      $builder = $this->db->table('users_programs_links');
      $builder->select("users_programs_links.id, users_programs_links.affiliate_link_id, users_programs_links.user_id, campaigns.name, settings.merchant_name");
      $builder->join('campaigns', "campaigns.id = users_programs_links.campaign_id", "left");
      $builder->join('settings', "settings.user_id = campaigns.user_id", "left");
      $builder->where(["users_programs_links.user_id"=>$userId]);
      $query = $builder->get();
      // echo $this->db->getLastQuery();die();
      return $query;
    }
}
