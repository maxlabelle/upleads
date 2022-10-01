<?php

namespace App\Controllers;

class Routing extends BaseController
{
    public function index() {
        return redirect()->to('/');
    }

    public function merchantHome($merchantUrlSlug = false) {
      $settings = false;

      if (!$merchantUrlSlug && $this->merchant_url_slug) {
          $merchantUrlSlug = $this->merchant_url_slug;
      }

      if ($merchantUrlSlug) {
        $settings = $this->settingsModel->getWhereSingle(['merchant_url_slug'=>$merchantUrlSlug]);
        if (!$settings) {
          return redirect()->to('/');
        }
      }

      return $this->template->view('merchantHome', [
        'merchant'=>$merchantUrlSlug,
        'settings'=>$settings,
      ], false, "website");
    }

    public function merchantImage($type, $merchantUrlSlug, $thumbnail = false) {
      $settings = $this->settingsModel->getWhereSingle(['merchant_url_slug'=>$merchantUrlSlug]);
      $path = '';

      if ($type=="bg") {
        $path.=$settings->merchant_bg_path;
      }

      if ($type=="logo") {
        $path.=$settings->merchant_logo_path;
      }

      if ($thumbnail) {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $filename = pathinfo($path, PATHINFO_FILENAME);
        $path = "{$filename}_thumb.{$ext}";
      }

      $path = WRITEPATH.'uploads/'.$settings->user_id."/".$path;

      $image = getImage($path);
      if ($image === FALSE)  {
        show_404();
      }
      header("Content-Type: {$image['mimeType']}");
      return $image['file'];
    }

    public function redirect($affiliateLinkId) {
      $smalluid = suid();
      return redirect()->to("/?_ulaid=$affiliateLinkId&_ulsuid=$smalluid");
    }

    public function tracking($trackingId, $tracking) {
      return $this->template->view('tracking', [
        'tracking' => $tracking,
        'baseURL' => getenv('app.baseURL'),
      ], false, "website");
    }

    public function pixel($affiliateId, $smallUid, $tracking) {
      return $this->template->view('pixel', [], false, "website");
    }
}
