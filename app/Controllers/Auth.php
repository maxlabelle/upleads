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

    public function login($merchantUrlSlug = false) {
      $auth = false;
      $settings = false;
      $config = getDefaultConfig();
      $error = false;

      if (!$merchantUrlSlug && $this->merchant_url_slug) {
          $merchantUrlSlug = $this->merchant_url_slug;
      }

      if ($merchantUrlSlug) {
        $settings = $this->settingsModel->getWhereSingle(['merchant_url_slug'=>$merchantUrlSlug]);
        if (!$settings) {
          return redirect()->to('/');
        }
        $config = $this->settingsModel->getConfig($settings->user_id);
      }

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
                'userId'=>$row->id,
                'roles'=>$row->roles,
              ]);
              return redirect()->to('/dashboard');
            }
          }
        }
      }

      return $this->template->view('login', [
        'error'=>$error,
        'merchant'=>$merchantUrlSlug,
        'settings'=>$settings,
        'config'=>$config,
      ], false, "website");
    }

    public function register($merchantUrlSlug = false) {
      $error = false;
      $settings = false;
      $config = getDefaultConfig();

      if (!$merchantUrlSlug && $this->merchant_url_slug) {
          $merchantUrlSlug = $this->merchant_url_slug;
      }

      if ($merchantUrlSlug) {
        $settings = $this->settingsModel->getWhereSingle(['merchant_url_slug'=>$merchantUrlSlug]);
        if (!$settings) {
          return redirect()->to('/');
        }
        $config = $this->settingsModel->getConfig($settings->user_id);
      }

      $action = $this->request->getVar('action');
      if ($action == "register") {
        $error = "Passwords do not match.";

        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $passwordconf = $this->request->getVar('passwordconf');

        if (
          $password === $passwordconf
        ) {
          $userId = uid();

          $roles = [];
          $merchantId = false;

          if ($merchantUrlSlug) {
            $roles[] = 'Affiliate';
            $merchantId = $settings->user_id;
          } else {
            $roles[] = "Merchant";
          }

          $roles = json_encode($roles);
          $this->usersModel->create([
            'id' => $userId,
            'name' => $name,
            'email' => $email,
            'merchant_id' => $merchantId,
            'passwordhash' => password_hash($password, PASSWORD_BCRYPT),
            'status' => 'Active',
            'approved' => (isset($config['autoapprove']) && $config['autoapprove']==='Yes') ? 'Yes' : 'No',
            'roles' => $roles,
          ]);

          $this->session->set([
            'userId'=>$userId,
            'roles'=>$roles,
          ]);

          return redirect()->to('/dashboard');
        }
      }

      return $this->template->view('register', [
        'error'=>$error,
        'merchant'=>$merchantUrlSlug,
        'settings'=>$settings,
        'config'=>$config,
      ], false, "website");
    }
}
