<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carpooling_db";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Verifica connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>
