<?php

// Connexion à la BDD
try {
    $servername = "localhost";
    $dbname = "chronomeca";
    $username = "root";
    $password = "";
    $db = new PDO("mysql:host=$servername;dbname=$dbname;", "$username", "$password");
} catch (PDOException $e) {
    die("Erreur : " .$e->getMessage());
}

?>