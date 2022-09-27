<?php

namespace App\Controllers;

class Merchants extends SecureBaseController
{
    public function campaigns($operation = false, $campaignId = false) {
      $userId = $this->session->get('userId');

      if ($operation) {
        $action = $this->request->getVar("action");
        if ($action == "save") {
          $name = $this->request->getVar("name");
          $affiliateApproval = $this->request->getVar("affiliateApproval");
          $this->db->table('campaigns')->insert([
            'id' => uid(),
            'user_id' => $userId,
            'name' => $name,
            'affiliateApproval' => $affiliateApproval,
            'status' => 'PENDING'
          ]);
          return redirect()->to('/merchants/campaigns');
        }

        if ($operation === "delete") {
          $this->db->table('campaigns')->delete(['user_id'=>$userId, 'id'=>$campaignId]);
          return redirect()->to('/merchants/campaigns');
        }
        
        $campaign = false;
        if ($operation === "edit") {
          $campaign = $this->db->table('campaigns')->getWhere(['user_id'=>$userId, 'id'=>$campaignId]);
        }
        return $this->template->view('merchants/campaignsEdit', [
          'campaign' => $campaign
        ]);
      } else {
        $campaigns = $this->db->table('campaigns')->getWhere(['user_id'=>$userId]);
        return $this->template->view('merchants/campaigns', [
          'campaigns' => $campaigns
        ]);
      }
    }
}
