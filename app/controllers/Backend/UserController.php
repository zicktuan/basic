<?php

class UserController extends BaseController {

    private $userModel;

    public function __construct()
    {
        $this->loadModel( 'UserModel' );
        $this->userModel = new UserModel;
    }

    public function index() {
        return $this->view( 'admin.users.create' );
    }

    public function store() {
        $errors = [];
        $status = '';
        if ( empty($_POST['username']) ) {
            $errors['username'] = 'username ko dc de trong';
        } else {
            $username = $_POST['username'];
        }

        if ( empty($_POST['password']) ) {
            $errors['password'] = 'password ko dc de trong';
        } else {
            $password = $_POST['password'];
        }

        if (empty($errors)) {
            $data = [
                'username' => $username,
                'password' => md5($password),
                'email' => $username.'@gmail.com',
                'status' => 1,
                'level' => 0,
                'created_time' => time()
            ];
            
            $this->userModel->store( $data );

            $status = 'insert thanh cong';

            return $this->view('admin.users.index', ['status' => $status]);

        } else {

            return $this->view('admin.users.create', ['errors' => $errors]);
            
        }

    }
}