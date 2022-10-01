<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {

        return $this->template->view('home', ['settings' => getDefaultConfig()], true, "website");
    }

    public function pricing() {
        return $this->template->view('pricing', ['settings' => getDefaultConfig()], true, "website");
    }

    public function features() {
        return $this->template->view('features', ['settings' => getDefaultConfig()], true, "website");
    }

}
