<?php

include '/Applications/MAMP/htdocs/basic/app/models/UserModel.php';

class UserController {

    private $action = '';

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->checkActionUrl();
    }

    public function index() {
        $data = $this->userModel->getAll();
        include '/Applications/MAMP/htdocs/basic/views/admin/users/index.php';
    }

    public function create() {
        include '/Applications/MAMP/htdocs/basic/views/admin/users/add.php';
    }

    public function store( $id ) {

    }

    public function update( $id ) {

    }

    public function delete( $id ) {

    }

    public function checkActionUrl() {
        if ( isset( $_GET['action'] ) ) {
            $this->action = $_GET['action'];
        }

        switch ( $this->action ) {
            case 'index':
                $this->index();
                break;
            case 'create':
                $this->create();
                break;
            case 'store':
                $this->create();
                break;
            case 'update':
                $this->create();
                break;
            case 'delete':
                $this->create();
                break;
        }
    }
}

new UserController();
