<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to('/');
    }

    public function logout() {
      $this->session->set(['userId'=>false]);
      $this->session->destroy();
      return redirect()->to('/');
    }

    public function login() {
      $auth = false;
      $userId = $this->session->get('userId');
      if (!empty($userId)) {
        $query = $this->db->table('users')->getWhere(['id'=>$userId]);
        if ($query->getNumRows()) {
          $auth = true;
        }
      }
      if ($auth) {
        return redirect()->to('/dashboard');
      }

      $error = false;
      $action = $this->request->getVar('action');
      if ($action == "login") {
        $error = "Invalid email or password";
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if (!empty($email) && !empty($password)) {
          $query = $this->db->table('users')->getWhere(['email'=>$email]);
          if ($query->getNumRows()) {
            $row = $query->getRow();
            if (password_verify($password, $row->passwordhash)) {
              $this->session->set([
                'userId'=>$row->id
              ]);
              return redirect()->to('/dashboard');
            }
          }
        }
      }

      return $this->template->view('login', ['error'=>$error], false, "website");
    }

    public function register() {
      $error = false;

      return $this->template->view('register', ['error'=>$error], false, "website");
    }
}