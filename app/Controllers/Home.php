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

    public function view($page_name) {
      $content = '';
      $superAdmin = $this->usersModel->getWhereSingle(['is_super_admin'=>'Yes']);

      if ($superAdmin) {
        $page_header = $this->pagesModel->getWhereSingle(['user_id'=>$superAdmin->id, 'page_type'=>'Header']);
        if ($page_header) {
          $content .= base64_decode($page_header->page_body);
        }

        $page = $this->pagesModel->getWhereSingle(['user_id'=>$superAdmin->id, 'page_name'=>$page_name]);
        $content .= base64_decode($page->page_body);

        $page_footer = $this->pagesModel->getWhereSingle(['user_id'=>$superAdmin->id, 'page_type'=>'Footer']);
        if ($page_footer) {
          $content .= base64_decode($page_footer->page_body);
        }
      }

      return $content;
    }

}
