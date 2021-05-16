<?php

include 'app/models/UserModel.php';

class UserController {

    private $users;

    public function __construct()
    {
        $this->users = new UserModel();
    }

    public function index() {
        $data = $this->users->getAll();
        return $data;
    }
}