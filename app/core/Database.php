<?php

class Database {

    private $host;
    private $user;
    private $pass;
    private $dbName;

    public function __construct()
    {
        $this->host      = DB_HOST;
        $this->user      = DB_USER;
        $this->pass      = DB_PASS;
        $this->dbName    = DB_NAME;
    }

    public function connect() {
        try {
            $connect = new PDO( "mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->pass );
            return $connect;
        } catch ( PDOException $e ) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


}