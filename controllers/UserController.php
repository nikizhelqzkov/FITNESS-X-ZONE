<?php

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }


    public function loggedIn()
    {
        if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
            return false;
        }

        return true;
    }

    public function logIn()
    {
        $user = $this->model->getUser();
        if ($user) {
            $_SESSION['user'] = $user;
        }

        return $user;
    }

    public function save()
    {
        if ($this->model->save()) {
            return true;
        }

        return false;
    }

    // public function activate($email,$password, $hash)
    // {
    //     return $this->model->activateUser($email, $password, $hash);
    // }
}
