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
          $item_price = $this->request->getVar("item_price");
          $item_commission_pc = $this->request->getVar("item_commission_pc");

          if ($operation === "edit") {
            $this->campaignsModel->edit($campaignId, [
              'user_id' => $userId,
              'name' => $name,
              'status' => $status,
              'item_price' => $item_price,
              'item_commission_pc' => $item_commission_pc,
              'affiliateApproval' => $affiliateApproval,
            ]);
          } else {
            $this->campaignsModel->create([
              'id' => uid(),
              'user_id' => $userId,
              'name' => $name,
              'status' => $status,
              'item_price' => $item_price,
              'item_commission_pc' => $item_commission_pc,
              'affiliateApproval' => $affiliateApproval,
            ]);
          }
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
          $approved = $this->request->getVar("approved");

          if ($operation === "edit") {
            $this->usersModel->edit(['merchant_id'=>$userId, 'id'=>$affiliateId], [
              'name' => $name,
              'status' => $status,
              'approved' => $approved,
            ]);
          }
          return redirect()->to('/merchants/affiliates');
        }

        if ($operation === "delete") {
          $this->usersModel->edit(['merchant_id'=>$userId, 'id'=>$affiliateId], [
            'deleted' => 'Yes',
          ]);
          return redirect()->to('/merchants/affiliates');
        }

        $affiliate = false;
        if ($operation === "edit") {
          $affiliate = $this->usersModel->getWhereSingle(['merchant_id'=>$userId, 'id'=>$affiliateId]);
        }
        return $this->template->view('merchants/affiliatesEdit', [
          'affiliate' => $affiliate
        ]);
      } else {
        $affiliates = $this->usersModel->getWhere(['merchant_id'=>$userId, 'deleted'=>'No']);
        return $this->template->view('merchants/affiliates', [
          'affiliates' => $affiliates
        ]);
      }
    }

    public function settings() {
      $errors = [];

      $userId = $this->session->get('userId');

      $action = $this->request->getVar("action");
      if ($action == "save") {
        $merchant_logo = $this->request->getFile('merchant_logo');
        $uploadsPath = WRITEPATH . "uploads/$userId";
        if ($merchant_logo->isValid()) {
          $uid = uid();
          $ext = $merchant_logo->guessExtension();
          $merchant_logo_path = "{$uid}.$ext";
          $merchant_logo_thumb_path = "{$uid}_thumb.$ext";
          $merchant_logo->move($uploadsPath, $merchant_logo_path);
          $this->settingsModel->edit(['user_id' => $userId], [
            'merchant_logo_path' => $merchant_logo_path,
          ]);

          $image = \Config\Services::image();

          try {
              $image->withFile("$uploadsPath/$merchant_logo_path")
                  ->fit(100, 100, 'center')
                  ->save("$uploadsPath/$merchant_logo_thumb_path");
          } catch (CodeIgniter\Images\Exceptions\ImageException $e) {
              echo $e->getMessage();
          }

        }
        $merchant_bg = $this->request->getFile('merchant_bg');
        if ($merchant_bg->isValid()) {
          $uid = uid();
          $ext = $merchant_bg->guessExtension();
          $merchant_bg_path = "{$uid}.$ext";
          $merchant_bg_thumb_path = "{$uid}_thumb.$ext";
          $merchant_bg->move($uploadsPath, $merchant_bg_path);
          $this->settingsModel->edit(['user_id' => $userId], [
            'merchant_bg_path' => $merchant_bg_path,
          ]);

          $image = \Config\Services::image();

          try {
              $image->withFile("$uploadsPath/$merchant_bg_path")
                  ->fit(100, 100, 'center')
                  ->save("$uploadsPath/$merchant_bg_thumb_path");
          } catch (CodeIgniter\Images\Exceptions\ImageException $e) {
              echo $e->getMessage();
          }

        }

        $merchant_domain = $this->request->getVar("merchant_domain");
        $merchant_terms = $this->request->getVar("merchant_terms");
        $merchant_home = $this->request->getVar("merchant_home");
        $merchant_theme = $this->request->getVar("merchant_theme");
        $merchant_autoapprove = $this->request->getVar("merchant_autoapprove");
        $merchant_name = $this->request->getVar("merchant_name");

        $url_slug = slugify($merchant_name);

        if ($this->settingsModel->slugExists($userId, $url_slug)) {
          $url_slug = '';
          $name = '';
          $errors[] = "Merchant name is already taken.";
        }

        if ($this->settingsModel->domainExists($userId, $merchant_domain)) {
          $merchant_domain = '';
          $errors[] = "Merchant domain is already taken.";
        }

        $this->settingsModel->edit(['user_id' => $userId], [
          'merchant_terms' => $merchant_terms,
          'merchant_home' => $merchant_home,
          'merchant_url_slug' => $url_slug,
          'merchant_domain' => $merchant_domain,
          'merchant_autoapprove' => $merchant_autoapprove,
          'merchant_name' => $merchant_name,
          'merchant_theme' => $merchant_theme,
        ]);

        if (!$errors) {
          return redirect()->to('/merchants/settings');
        }
      }

      $settings = $this->settingsModel->getWhereSingle(['user_id'=>$userId]);

      return $this->template->view('merchants/settings', [
        'settings' => $settings,
        'errors' => $errors,
      ]);
    }
}
