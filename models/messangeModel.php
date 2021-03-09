<?php
class Message
{
    
    private $messagesId;
    private $date;
    private $email;
    private $subject;
    private $message;
    public function __construct()
    {

    }

    public function getMessagesId()
    {
        return $this->messagesId;
    }

    public function setMessagesId($messagesId)
    {
        $this->messagesId = $messagesId;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function getMessage()
    {
        return $this->message;
    }
    public function setMessage($message)
    {
        $this->message = $message;
    }
   
}
?>