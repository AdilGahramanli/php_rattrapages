<?php
class Client {
private $lastname;
private $firstname;
function __construct($lastname, $firstname){
    $this->lastname = $lastname;
    $this->firstname = $firstname;
}
public function getlastname(){
    return $this->lastname;
}

public function getfirstname(){
    return $this->firstname;
}    

public function getPantoufle(){
    return ["gilles","pantoufle"];
}

}


