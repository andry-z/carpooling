<?php
include 'config.php';

// Registrazione autista
if (isset($_POST['registra_autista'])) {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $numero_patente = $_POST['numero_patente'];
    $scadenza_patente = $_POST['scadenza_patente'];
    $automobile = $_POST['automobile'];
    $recapito_telefonico = $_POST['recapito_telefonico'];
    $email = $_POST['email'];
    $fotografia = $_POST['fotografia'];

    $sql = "INSERT INTO autisti (nome, cognome, numero_patente, scadenza_patente, automobile, recapito_telefonico, email, fotografia) VALUES ('$nome', '$cognome', '$numero_patente', '$scadenza_patente', '$automobile', '$recapito_telefonico', '$email', '$fotografia')";

    if ($conn->query($sql) === TRUE) {
        echo "Autista registrato con successo!";
        echo "<a href='login.php'>Effettua il login</a>";
    } else {
        echo "Errore durante la registrazione dell'autista: " . $conn->error;
    }
}

// Registrazione passeggero
if (isset($_POST['registra_passeggero'])) {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $documento_identità = $_POST['documento_identità'];
    $recapito_telefonico = $_POST['recapito_telefonico'];
    $email = $_POST['email'];

    $sql = "INSERT INTO passeggeri (nome, cognome, documento_identità, recapito_telefonico, email) VALUES ('$nome', '$cognome', '$documento_identità', '$recapito_telefonico', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Passeggero registrato con successo!";
        echo "<a href='login.php'>Effettua il login</a>";
    } else {
        echo "Errore durante la registrazione del passeggero: " . $conn->error;
    }
}

$conn->close();
?>
