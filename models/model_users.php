<?php
// модель
Class Model_Users Extends Model_Base {

    public $id;
    public $name;
    public $password;
    public $email;
    public $active;

    public function fieldsTable(){
        return array(
            'id'       => 'Id',
            'name'     => 'Name',
            'password' => 'Password',
            'email'    => 'Email',
            'active'   => 'Active'
        );
    }
}