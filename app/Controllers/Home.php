<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return $this->template->view('home', [], true, "website");
    }

    public function pricing() {
        return $this->template->view('pricing', [], true, "website");
    }

    public function features() {
        return $this->template->view('features', [], true, "website");
    }

    public function merchant($merchantName = false) {
      return $this->template->view('merchant', [], true, "website");
    }
}
