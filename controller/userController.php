<?php
include_once 'models/userMapper.php';
include_once 'models/userModel.php';
class UserController
{
    

    public function GetUsers()
    {
       
        $userMapper = new UserMapper();
        $users = $userMapper->GetUsers(); 
        return $users;

    }

    public function register($firstname, $lastname, $email, $password){
        $userMapper = new UserMapper();
        $userMapper->register($firstname, $lastname, $email, $password); 
    }

    public function login($email, $password){
        $userMapper = new UserMapper();
        $result = $userMapper->login($email, $password); 
        return $result;
    }
}