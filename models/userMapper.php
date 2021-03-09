<?php
include_once 'DbConn.php';
include_once 'userModel.php';
class UserMapper
{
    private $user;
    private $connection;
    public function __construct()
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
    }

    public function withUser(\User $user)
    {
        $this->user = $user;
    }

    
    public function getUsers(){
        $sth = $this->connection->prepare("SELECT * FROM user");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }

    public function register($firstname, $lastname, $email, $password){
        $sql = "INSERT INTO user (role, firstname, lastname, email, password, register_date) VALUES (:role, :firstname, :lastname,:email,:password,:register_date)";

        $role = "User";
        $register_date = "2021-01-01";
        $enc_password =  md5($password);
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('role', $role);
        $statement->bindParam('firstname', $firstname);
        $statement->bindParam('lastname', $lastname);
        $statement->bindParam('email', $email);
        $statement->bindParam('password', $enc_password);
        $statement->bindParam('register_date', $register_date);
        $issucess = $statement->execute();

        if($issucess){

            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;

            header("Location: index.php");
        }
    }

    public function login($email, $password){
        $sql = "SELECT * FROM user WHERE email=:email AND password=:password";

        $enc_password =  md5($password);
        $statement = $this->connection->prepare($sql);
        $statement->bindParam('email', $email);
        $statement->bindParam('password', $enc_password);
        $statement->execute();
        $count = $statement->rowcount();
        $result = $statement->fetch();

        if($count > 0){

            $_SESSION['email'] = $result['email'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];

            return true;
        }else{
            return false;
        }
    }
}
