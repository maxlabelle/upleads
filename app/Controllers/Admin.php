<?php

namespace App\Controllers;

class Admin extends SecureBaseController
{
    public function users($operation = false, $userId = false) {

      if ($operation) {
        $action = $this->request->getVar("action");
        if ($action == "save") {
          $name = $this->request->getVar("name");
          $status = $this->request->getVar("status");
          $email = $this->request->getVar("email");
          $password = $this->request->getVar("password");
          $roles = $this->request->getVar("roles");

          if ($operation === "edit") {            
            $data = [
              'name' => $name,
              'email' => $email,
              'roles' => json_encode($roles),
              'status' => $status,
            ];
            if (!empty($password)) {
              $data['passwordhash'] = password_hash($password, PASSWORD_BCRYPT);
            }

            $this->usersModel->edit($userId, $data);
          } else {
            $this->usersModel->create([
              'id' => uid(),
              'name' => $name,
              'roles' => json_encode($roles),
              'passwordhash' => password_hash($password, PASSWORD_BCRYPT),
              'email' => $email,
              'status' => $status,
            ]);
          }
          return redirect()->to('/admin/users');
        }

        if ($operation === "delete") {
          $this->usersModel->remove(['id'=>$userId]);
          return redirect()->to('/admin/users');
        }

        $user = false;
        if ($operation === "edit") {
          $user = $this->usersModel->getWhereSingle(['id'=>$userId]);
        }
        return $this->template->view('admin/usersEdit', [
          'user' => $user
        ]);
      } else {
        $users = $this->usersModel->getWhere([]);
        return $this->template->view('admin/users', [
          'users' => $users
        ]);
      }
    }
}
