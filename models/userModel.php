<?php
class User
{
    private $user_id;
    private $role;
    private $firstname;
    private $lastname;
    private $password;  
    private $email; 
    public function __construct()
    {
    }

    public function getUserId()
    {
        return $this->user_id;
    }
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }
    public function getLastName()
    {
        return $this->lastname;
    }
    public function setFirstName($firstname)
    {
        $this->firstName = $firstname;
    }
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }
}
