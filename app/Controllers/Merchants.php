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
          $status = $this->request->getVar("status");
          $affiliateApproval = $this->request->getVar("affiliateApproval");
          if ($operation === "edit") {
            $this->campaignsModel->edit($campaignId, [              
              'user_id' => $userId,
              'name' => $name,
              'status' => $status,
              'affiliateApproval' => $affiliateApproval,
            ]);
          } else {
            $this->campaignsModel->create([
              'id' => uid(),
              'user_id' => $userId,
              'name' => $name,
              'status' => $status,
              'affiliateApproval' => $affiliateApproval,
            ]);
          }
          return redirect()->to('/merchants/campaigns');
        }

        if ($operation === "delete") {
          $this->campaignsModel->remove(['user_id'=>$userId, 'id'=>$campaignId]);
          return redirect()->to('/merchants/campaigns');
        }

        $campaign = false;
        if ($operation === "edit") {
          $campaign = $this->campaignsModel->getWhereSingle(['user_id'=>$userId, 'id'=>$campaignId]);
        }
        return $this->template->view('merchants/campaignsEdit', [
          'campaign' => $campaign
        ]);
      } else {
        $campaigns = $this->campaignsModel->getWhere(['user_id'=>$userId]);
        return $this->template->view('merchants/campaigns', [
          'campaigns' => $campaigns
        ]);
      }
    }
}
