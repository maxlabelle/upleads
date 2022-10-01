<?php

namespace App\Controllers;

class Affiliate extends SecureBaseController
{
    public function programs($operation = false, $campaignId = false) {
      $userId = $this->session->get('userId');

      if ($operation) {
        $action = $this->request->getVar("action");

        if ($operation === "join") {
          $this->usersModel->join($userId, $campaignId);
          return redirect()->to('/affiliate/programs');
        }
      } else {
        $campaigns = $this->campaignsModel->getWhere(['status'=>'Active']);
        $user_programs = $this->usersModel->programs($userId);
        
        return $this->template->view('affiliate/campaigns', [
          'user_programs' => $user_programs,
          'campaigns' => $campaigns,
        ]);
      }
    }

}
