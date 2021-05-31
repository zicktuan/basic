<?php

class BaseModel extends Database {

    protected $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->connect();
    }

    /**
     * Get All data
     */
    public function all( $table, $select = ['*'], $orderBy = [], $limit = 15 ) {
        
        $columns = implode( ',', $select );

        $orderByString = implode( ' ', $orderBy );

        if ( $orderByString ) {
            $sql = "SELECT ${columns} FROM ${table} ORDER BY ${orderByString} LIMIT ${limit}";
        } else {
            $sql = "SELECT ${columns} FROM ${table} LIMIT ${limit}";
        }

        $rows = $this->_query( $sql );

        $data = $rows->fetchAll();

        return $data;
    }

    /**
     * Get Data by id
     * $id integer
     */
    public function findById( $table, $id ) {
        $sql = "SELECT * FROM ${table} WHERE ${id} LIMIT 1";

        $row = $this->_query( $sql );

        $data = $row->fetch();

        return $data;
    }

    /**
     * insert data in database
     */
    public function create( $table, $data = [] ) {

        foreach ( $data as $key => $value ) {
            $items[] = ':' . $key;
        }

        $values = implode( ', ', $items );
        
        $columns  = implode( ', ', array_keys( $data ) );

        $sql = "INSERT INTO ${table} ( ${columns} ) VALUES ( ${values} )";

        $this->_query( $sql, $data );
    }

    /**
     * Update data by Id
     * $id integer
     */
    public function update( $id ) {

    }

    /**
     * Delete data by id
     * $id integer
     */
    public function delete( $id ) {
        
    }

    private function _query( $sql, $data = [] ) {

        if ( !empty( $data ) ) {
            $stmt = $this->conn->prepare( $sql );
            $stmt->execute( $data );
            return $stmt;
        }

        return $this->conn->query( $sql, PDO::FETCH_ASSOC );
    }
}