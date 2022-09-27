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
    public function affiliates($operation = false, $affiliateId = false) {
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

    public function settings() {
      $userId = $this->session->get('userId');
      $settings = $this->settingsModel->getSettings($userId);

      $action = $this->request->getVar("action");
      if ($action == "save") {
        $name = $this->request->getVar("name");
        $url_slug = slugify($this->request->getVar("url_slug"));
        $this->settingsModel->slugExists($userId, $url_slug);
        $theme = $this->request->getVar("theme");

        $this->settingsModel->setValue($userId, "name", $name);
        $this->settingsModel->setValue($userId, "url_slug", $url_slug);
        $this->settingsModel->setValue($userId, "theme", $theme);

        return redirect()->to('/merchants/settings');
      }

      return $this->template->view('merchants/settings', [
        'settings' => $settings,
      ]);
    }
}
