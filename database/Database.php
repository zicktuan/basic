<?php

include 'config/config.php';

class Database {

    private $host;
    private $userName;
    private $pass;
    private $dbName;
    protected $conn;

    private static $getInstance = null;

    public static function getInstance() {
        if ( !( self::$getInstance instanceof self ) ) {
            self::$getInstance = new self();
        }

        return self::$getInstance;
    }


    public function __construct()
    {
        $this->host      = DB_HOST;
        $this->userName  = DB_USER;
        $this->pass      = DB_PASS;
        $this->dbName    = DB_NAME;
    }

    public function connect() {
        try {
            $this->conn = new PDO( "mysql:host=$this->host;dbname=$this->dbName", $this->userName, $this->pass );
        } catch ( PDOException $e ) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}