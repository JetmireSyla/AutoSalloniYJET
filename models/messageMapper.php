<?php
include_once 'DbConn.php';
include_once 'messageModel.php';
class MessageMapper
{
    private $message;
    private $connection;
    public function __construct()
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
    }

    public function withMessage(\Messages $message)
    {
        $this->message = $message;
    }

    public function Insert($email,$subject,$message)
    {

        $sql = "INSERT INTO messages (date,email,subject,message) 
                VALUES (:date,:email,:subject,:message)";
            $date = '2020-02-01';
            $statement = $this->connection->prepare($sql);
            $statement->bindParam('date', $date);
            $statement->bindParam('email', $email);
            $statement->bindParam('subject', $subject);
            $statement->bindParam('message', $message);
            $statement->execute();

    }

    public function getMessages(){
        $sth = $this->connection->prepare("SELECT * FROM messages");
        $sth->execute();

        $result = $sth->fetchAll();
        return $result;
    }
}
