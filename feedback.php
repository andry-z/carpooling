<?php
include 'config.php';

// Inserimento del feedback sull'autista da parte del passeggero
if (isset($_POST['inserisci_feedback_autista'])) {
    $autista_id = $_POST['autista_id'];
    $passeggero_id = $_SESSION['passeggero_id']; // Supponiamo che l'ID del passeggero sia stato memorizzato in una sessione
    $voto = $_POST['voto'];
    $commento = $_POST['commento'];

    $sql = "INSERT INTO feedback_autisti (autista_id, passeggero_id, voto, commento) VALUES ('$autista_id', '$passeggero_id', '$voto', '$commento')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback sull'autista inserito con successo!";
    } else {
        echo "Errore durante l'inserimento del feedback sull'autista: " . $conn->error;
    }
}

// Inserimento del feedback sul passeggero da parte dell'autista
if (isset($_POST['inserisci_feedback_passeggero'])) {
    $autista_id = $_SESSION['autista_id']; // Supponiamo che l'ID dell'autista sia stato memorizzato in una sessione
    $passeggero_id = $_POST['passeggero_id'];
    $voto = $_POST['voto'];
    $commento = $_POST['commento'];

    $sql = "INSERT INTO feedback_passeggeri (autista_id, passeggero_id, voto, commento) VALUES ('$autista_id', '$passeggero_id', '$voto', '$commento')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback sul passeggero inserito con successo!";
    } else {
        echo "Errore durante l'inserimento del feedback sul passeggero: " . $conn->error;
    }
}

$conn->close();
?>
