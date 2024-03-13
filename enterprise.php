<?php 
include 'client.php';
Class Enterprise extends Client {
   
    public function __construct($lastname, $firstname) {
      parent::__construct($lastname,$firstname);
    }

   //  public function getfirstname() {
   //    return "$this->firstname";
   //  }

   //  public function getlastname(){
   //    return "$this->lastname"; 
   //  }
   public function actionCommeciale($outil) {
    return $this->getfirstname() . "  " . $this->getlastname() . " a acheté un . $outil";
   }
   
    
}

// $enterprise0 = new Enterprise("nom", "prenom0");
// echo $enterprise0-> actionCommeciale("tournevis");