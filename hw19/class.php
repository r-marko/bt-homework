<?php
class Contact {
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
    /*
    public static function contains($text=""){
        if (str_contains(self::$phone, $text) || str_contains(self::$email, $text)){
            return true;
        } else {
            return false;
        }
    }
    */
    public function contains($text=""){
        if (str_contains($this->phone, $text) || str_contains($this->email, $text)){
            return true;
        } else {
            return false;
        }
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
        $contactArray2 = [];
        $contactArray[] = (array)$this->contacts;
        //var_dump($contactArray);
        //echo "<br><br>";
        foreach ($contactArray as $values){
            foreach ($values as $value){
                 $contactArray2[] = (array)$value;
            }
        }
        var_dump($contactArray2);  // prebaceno u niz i sad ne znam kako dalje ;)
       // echo "<br>";
    }
}

?>
