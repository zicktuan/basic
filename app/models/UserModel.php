<?php

include '/Applications/MAMP/htdocs/basic/database/Database.php';

class UserModel {

    private $table = 'users';
    
    public function __construct()
    {

    }

    public function getAll() {
        $sql = "SELECT * FROM $this->table";
        $stmt = Database::getInstance()->query( $sql );
        $result = $stmt->fetchAll();

        if ( !empty( $result ) ) {
            return $result;
        }

        return null;
    }

    public function getBy( $sql, $param ) {
        $stmt = Database::getInstance()->query( $sql, $param );
        $result = $stmt->fetch();

        if ( null == $result ) {
            return 0;
        } else {
            return 1;
        }
    }

    public function add( $sql, $data ) {
        $stmt = Database::getInstance()->query( $sql, $data );
        if ( $stmt ) {
            return 1;
        } else {
            return 0;
        }
    }
}