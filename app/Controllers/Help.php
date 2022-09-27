<?php

namespace App\Controllers;

class Help extends SecureBaseController
{
    public function index() {
        return $this->template->view('help');
    }
}
