<?php

include '/Applications/MAMP/htdocs/basic/app/models/UserModel.php';

class UserController {

    private $action = '';

    private $userModel;

    private $table = 'users';

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->checkActionUrl();
    }

    public function index() {
        $data = $this->userModel->getAll();
        $rootDir = '/Applications/MAMP/htdocs/basic';
        include $rootDir . '/views/admin/users/index.php';
        // include '/Applications/MAMP/htdocs/basic/views/admin/users/index.php';
    }

    public function create() {
        include '/Applications/MAMP/htdocs/basic/views/admin/users/add.php';
    }

    public function store() {
        $errors = [];
        if ( isset($_POST['btn-submit-user'] )) {
            $username = !empty( $_POST['username'] ) ? filter_var( trim( $_POST['username'] ), FILTER_SANITIZE_STRING ) : $errors['username'] = 'Username không được để trống!';
            $email    = !empty( $_POST['email'] ) ? filter_var( trim( $_POST['email'] ), FILTER_SANITIZE_EMAIL ) : $errors['email'] = 'Email không được để trống!';
            $password = !empty( $_POST['password'] ) ? md5( trim( $_POST['password'] ) ) : $errors['password'] = 'Password không được để trống!';
            $rePass   = !empty( $_POST['re-password'] ) ? md5( trim( $_POST['re-password'] ) ) : $errors['rePass'] = 'Comfirm password không được để trống';
            $status   = $_POST['status'];
            $level    = $_POST['level'];

            $sql = "SELECT * FROM $this->table WHERE username=?";
            $sql = "SELECT * FROM $this->table WHERE email=?";

            $checkUsername = $this->userModel->getBy( $sql, [$username] );
            $checkEmail    = $this->userModel->getBy( $sql, [$email] );

            if( 1 == $checkUsername ) {
                $errors['checkUsername'] = 'Username already exists.';
            } elseif ( 1 == $checkEmail ) {
                $errors['checkEmail'] = 'Email already exists.';
            }
            
            if ( $password !== $rePass ) {
                $errors['checkPass'] = "Password doesn't not match.";
            }

            $data = [
                'username' => $username,
                'password' => $password,
                'email'    => $email,
                'status'   => $status,
                'level'    => $level,
                'created_time' => time()
            ];

            if ( empty( $errors ) ) {
                $sql  = "INSERT INTO users ( username, password, email, status, level, created_time ) VALUES ( :username, :password, :email, :status, :level, :created_time )";
                $user = $this->userModel->add( $sql, $data );
                if ( 1 == $user ) {
                    $msg = 'User added successfully';
                    header( "Location: index.php?controller=admin-user&action=create");
                    // include '/Applications/MAMP/htdocs/basic/views/admin/users/add.php';
                }
            } else {
                // header( "Location: index.php?controller=admin-user&action=create");
                include '/Applications/MAMP/htdocs/basic/views/admin/users/add.php';
            }
        }
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
                $this->store();
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
