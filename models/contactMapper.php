<?php
include_once 'DbConn.php';
include_once 'contactModel.php';
class ContactMapper
{
    private $contact;
    private $connection;
    public function __construct()
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
    }

    public function withContact(\Contact $contact)
    {
        $this->contact = $contact;
    }

    public function Insert()
    {
        $sql = "INSERT INTO user (firstname,lastname) VALUES (:firstname,:lastname)";

        $emri = $this->user->getFirstName();
        $mbiemri = $this->user->getLastName();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":firstname", $firstname);
        $statement->bindParam(":lastname", $lastname);

        $statement->execute();
    }

    public function Update()
    {

        $sql = "INSERT INTO user (firstname,lastname,phone_number) VALUES (:firstname,:lastname";
        $statement = $this->connection->prepare($sql);

        $firstname = $this->user->getFirstName();
        $lastname = $this->user->getLastName();
       
        $statement->bindParam(":firstname", $firstname);
        $statement->bindParam(":lastname", $lastname);
        $statement->execute();
    }

    public function getContactById($contact_id){
        $sth = $this->connection->prepare("SELECT * FROM contact WHERE contact_id = :contact_id");
        $sth->execute(['contact_id' => $contact_id]);
        $result = $sth->fetch();
        return $result;
    }
}
