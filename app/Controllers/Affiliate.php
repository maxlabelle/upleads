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
        if ($operation === "leave") {
          $this->usersModel->leave($userId, $campaignId);
          return redirect()->to('/affiliate/programs');
        }
      } else {
        $campaigns = $this->campaignsModel->getPrograms($userId);

        return $this->template->view('affiliate/campaigns', [
          'campaigns' => $campaigns,
        ]);
      }
    }

    public function links($operation = false, $linkId = false) {
      $userId = $this->session->get('userId');

      if ($operation) {
        $action = $this->request->getVar("action");

        if ($operation === "edit") {

          return $this->template->view('merchants/linksEdit', [
            'link' => $link
          ]);
        }

        if ($operation === "new") {
          $linkId = uid();
          $this->campaignsModel->create([
            'id' => $uid,
            'user_id' => $userId,
            'name' => $name,
            'status' => $status,
            'item_price' => $item_price,
            'item_commission_pc' => $item_commission_pc,
            'affiliateApproval' => $affiliateApproval,
          ]);
          return $this->template->view('merchants/linksEdit', [
            'link' => $link
          ]);
        }

        if ($operation === "drop") {
          $this->usersModel->drop($userId, $linkId);
          return redirect()->to('/affiliate/links');
        }

      } else {
        $links = $this->campaignsModel->getLinks($userId);

        return $this->template->view('affiliate/links', [
          'links' => $links,
        ]);
      }
    }

}
