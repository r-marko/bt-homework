<?php

abstract class Contact {
    protected $phone;
    protected $email;

    public function __construct($phone, $email){
        $this->phone = $phone;
        $this->$email = $email;
    }

    public function getAttributePhone(){
        return $this->phone;
    }

    public function getAttributeEmail(){
        return $this->email;
    }

    public function contains($text=""){
        if (str_contains($this->phone, $text) || str_contains($this->email, $text)){
            return true;
        } else {
            return false;
        }
    }

    //Zadatak 20

    public function displayMe(){
        echo $this->phone . "<br>" . $this->email;
    }

}

class ContactList extends Contact{
    public $contacts = [];

    public function addContact($object){
        if ($object instanceof Contact){
            $this->contacts[] = $object;
        }
    }

    public function listAllContacts(){
        $contactArray = [];
        foreach ((array)$this->contacts as $value){
                 $contactArray[] = (array)$value;
            }
        
        echo "<pre>";
        echo print_r($contactArray);
        echo "</pre>";
    // prebaceno u niz i sad ne znam kako dalje ;)
    }
}

// Zadatak 20

class CustomerContact extends Contact{
    protected $firstName;
    protected $lastName;

    public function displayMe(){
        echo $this->firstName . "<br>" . $this->lastName;
    }

    public function __construct($fname, $lname){
        $this->firstName = $fname;
        $this->lastName = $lname;
    }
}

class BusinessContact extends Contact{
    protected $address;
    protected $companyName;
    
    public function displayMe(){
        echo $this->address . "<br>" . $this->companyName;
    }

    public function __construct($addres, $companyName){
        $this->addres = $addres;
        $this->companyName = $companyName;
    }
}

?>
