<?php

$servername = 'localhost:3306';
$username = 'adil';
$password = 'PhpAdil_45';
$dbname = 'dbb_rattrapages';

// Créer la connexion
// $conn = new mysqli($servername, $username, $password, $dbname);



$pdo = new PDO('mysql:host=localhost:3306;dbname=dbb_rattrapages', $username,$password);
// $sth = $pdo->query($sql);
// Vérifier la connexion
// if ($conn->connect_error) {
//     die("Échec de la connexion : " . $conn->connect_error);
// } else {
//     echo "Connexion réussie !";
// }

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
// $clientData= $client1.ge


$pdo -> exec($sql);
// $pdo -> exec($sql_alter);
$pdo -> exec($sql_insert);

// Vérification du succès
if ($pdo->errorCode() === '00000') {
    echo " Table créée avec succès !";
  } else {
    echo "Échec lors de la création de la table : " . $pdo->errorInfo()[2];
  }
 
// Fermer la connexion
// $conn->close();