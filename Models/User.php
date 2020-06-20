<?php

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $role;
    function __construct($id, $username, $email, $password, $role)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getRole()
    {
        return $this->role;
    }
    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }
    function getName()
    {
        return $this->username;
    }
}