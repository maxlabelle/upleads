<?php

namespace App\Controllers;

class Routing extends BaseController
{
    public function index() {
        return redirect()->to('/');
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
