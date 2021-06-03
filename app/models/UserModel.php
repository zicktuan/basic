<?php

class UserModel extends BaseModel {
    
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

    public function update( $id, $data ) {
        $this->updateData( self::TABLE, $id, $data );
    }

    public function delete( $id ) {
        $this->destroy( self::TABLE, $id );
    }
}