<?php
include 'outil.php';
// include 'client.php';
include 'enterprise.php';

$tournevis = new Outil("tournevis");

$enterprise_test = new Enterprise("nomfereteteter","prenom");
$enterprise_message = $enterprise_test ->actionCommeciale($tournevis->getName());

// echo $tournevis->getName();
// echo $enterpris->getfirstname();

// $enterprise0 = new Enterprise("nom", "prenom0");

echo $enterprise_message;
// echo $enterprise_test->getfirstname();