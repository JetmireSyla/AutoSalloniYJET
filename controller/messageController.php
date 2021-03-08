<?php
include_once 'models/messageMapper.php';
include_once 'models/messageModel.php';
class MessageController
{

    public function GetMessages()
    {
       
        $messageMapper = new MessageMapper();
        $messages = $messageMapper->GetMessages(); 
        return $messages;

    }

    public function Insert($email,$subject,$message){
        $messageMapper = new MessageMapper();
        $messages = $messageMapper->Insert($email,$subject,$message); 
    }
}