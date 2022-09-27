<?php

namespace App\Controllers;

class Dashboard extends SecureBaseController
{
    public function index() {
        return $this->template->view('dashboard');
    }
}
