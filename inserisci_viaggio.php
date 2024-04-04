<?php
include 'config.php';

// Inserimento di un viaggio da parte dell'autista
if (isset($_POST['inserisci_viaggio'])) {
    $autista_id = $_POST['autista_id'];
    $citta_partenza = $_POST['citta_partenza'];
    $citta_destinazione = $_POST['citta_destinazione'];
    $data_ora_partenza = $_POST['data_ora_partenza'];
    $contributo_economico = $_POST['contributo_economico'];
    $tempi_percorrenza_stimati = $_POST['tempi_percorrenza_stimati'];

    $sql = "INSERT INTO viaggi (autista_id, città_partenza, città_destinazione, data_ora_partenza, contributo_economico, tempi_percorrenza_stimati) VALUES ('$autista_id', '$città_partenza', '$città_destinazione', '$data_ora_partenza', '$contributo_economico', '$tempi_percorrenza_stimati')";

    if ($conn->query($sql) === TRUE) {
        echo "Viaggio inserito con successo!";
    } else {
        echo "Errore durante l'inserimento del viaggio: " . $conn->error;
    }
}

$conn->close();
?>
