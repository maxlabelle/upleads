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
        $link=false;

        if ($operation === "delete") {
          $this->campaignsModel->deleteLink($userId, $linkId);
          return redirect()->to('/affiliate/links');
        }

        if ($action=="save") {
          if ($operation === "new") {
            $linkId = uid();
            $campaignId = $this->request->getVar("campaign_id");
            $affiliateLinkId = suid();
            $this->campaignsModel->createLink([
              'id' => $linkId,
              'user_id' => $userId,
              'affiliate_link_id' => $affiliateLinkId,
              'campaign_id' => $campaignId,
            ]);
            return redirect()->to('/affiliate/links');     
          }
        }

        $campaigns = $this->campaignsModel->getJoinedPrograms($userId);

        return $this->template->view('affiliate/linksEdit', [
          'campaigns' => $campaigns,
          'link' => $link,
        ]);
      } else {
        $links = $this->campaignsModel->getLinks($userId);

        return $this->template->view('affiliate/links', [
          'links' => $links,
        ]);
      }
    }

}
