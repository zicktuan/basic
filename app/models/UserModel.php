<?php

include 'database/Database.php';

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
}