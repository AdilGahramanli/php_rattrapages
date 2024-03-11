<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "databaserattrapages";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
} else {
    echo "Connexion réussie !";
}

// Requête SQL
$sql_select = "SELECT * FROM utilisateurs";
$sql_insert = "INSERT INTO utilisateurs (nom, email) VALUES ('Jean Dupont', 'jean.dupont@exemple.com');";
$sql_update = "UPDATE utilisateurs SET email = 'nouveau.email@exemple.com' WHERE id = 5";
$sql_delete = "DELETE FROM utilisateurs WHERE actif = 0;"


// Exécution de la requête
$result_select = $mysqli->query($sql_select);
$result_insert = $mysqli->query($sql_insert);
$result_update = $mysqli->query($sql_update);
$result_delete = $mysqli->query($sql_delete);









// Fermer la connexion
$conn->close();

?>
?>