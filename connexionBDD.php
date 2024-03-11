<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "donjonsetdragons";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie !";
}

// Fermer la connexion
$conn->close();

?>
?>