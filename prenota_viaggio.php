<?php
include 'config.php';

// Prenotazione di un viaggio da parte del passeggero
if (isset($_POST['prenota_viaggio'])) {
    $viaggio_id = $_POST['viaggio_id'];
    $passeggero_id = $_SESSION['passeggero_id']; // Supponiamo che l'ID del passeggero sia stato memorizzato in una sessione

    $sql = "INSERT INTO prenotazioni (viaggio_id, passeggero_id) VALUES ('$viaggio_id', '$passeggero_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Viaggio prenotato con successo!";
    } else {
        echo "Errore durante la prenotazione del viaggio: " . $conn->error;
    }
}

$conn->close();
?>
