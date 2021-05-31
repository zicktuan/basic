<?php

class ProductModel extends BaseModel {

    //ex users
    const TABLE = 'users';

    public function __construct()
    {
        parent::__construct(); 
    }

    public function getAll() {
        return $this->all( self::TABLE );
    }

    public function getById( $id ) {
        return $this->findById( self::TABLE, $id );
    }

    public function store( $data ) {
        $this->create( self::TABLE, $data );
    }
}