<?php
include 'client.php';

$servername = 'localhost:3306';
$username = 'adil';
$password = 'PhpAdil_45';
$dbname = 'dbb_rattrapages';



$clientsDatas=[];
$clientsObjects = [$client1 = new Client("Nom1", "prenom1"), $client2 = new Client("nom2", "prenom2"), $client3 = new Client("nom3", "prenom3")];
for($i=0; $i<count($clientsObjects); $i++){
  $clientsDatas[$i] = [$clientsObjects[$i]->getlastname(), $clientsObjects[$i]->getfirstname()];
}
var_dump($clientsDatas[0][0]);
$pdo = new PDO('mysql:host=localhost:3306;dbname=dbb_rattrapages', $username,$password);



// Requêtes SQL
$sql = "CREATE TABLE IF NOT EXISTS clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT
  )";
$sql_select = "SELECT * FROM clients";
$sql_insert = "INSERT INTO clients (nom,prenom) VALUES ('Dupont','jean')";
$sql_update = "UPDATE clients SET nom = 'Aristide' WHERE id = 0";
$sql_delete = "DELETE FROM clients WHERE id = 0";
$sql_alter = "ALTER TABLE clients DROP COLUMN email, DROP COLUMN age";

// $client1=new Client("Dupontel","Albert");

// $sql_insert_0 = "INSERT INTO clients (nom,prenom) VALUES (($clientsDatas[0][0]), $clientsDatas[0][1])";
// $sql_insert_1;
// $sql_insert_2;

$pdo -> exec($sql);
// $pdo -> exec($sql_alter);
$pdo -> exec($sql_insert);
// $pdo -> exec($sql_insert_0);

// Vérification du succès
if ($pdo->errorCode() === '00000') {
echo " Table créée avec succès !";
} else {
echo "Échec lors de la création de la table : " . $pdo->errorInfo()[2];
}
 
// -- // Fermer la connexion
// // -- // $conn->close();