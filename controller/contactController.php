<?php
include_once 'models/contactMapper.php';
include_once 'models/contactModel.php';
class ContactController
{
    
 public function GetContact()
    {
       
        $contactMapper = new ContactMapper();
        $contact = $contactMapper->GetContact(); 
        return $contact;

    }

    public function GetContactById($contact_id)
    {
       
        $contactMapper = new ContactMapper();
        $contact = $contactMapper->GetContactById($contact_id); 
        return $contact;

    }
}