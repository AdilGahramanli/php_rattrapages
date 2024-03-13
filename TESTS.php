<?php 
include ("client.php");
$client = new Client("nom1", "prenom1");
echo($client.getlastname());