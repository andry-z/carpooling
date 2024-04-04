<?php
include 'config.php';

// Visualizzazione dei viaggi disponibili per i passeggeri
$sql = "SELECT * FROM viaggi WHERE prenotazioni_chiuse = 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Città partenza: " . $row["città_partenza"]. " - Città destinazione: " . $row["città_destinazione"]. " - Data e ora partenza: " . $row["data_ora_partenza"]. "<br>";
        // Altre informazioni del viaggio possono essere visualizzate qui
        echo "<form action='prenota_viaggio.php' method='post'>";
        echo "<input type='hidden' name='viaggio_id' value='" . $row["id"] . "'>";
        echo "<input type='submit' name='prenota_viaggio' value='Prenota'>";
        echo "</form>";
    }
} else {
    echo "Nessun viaggio disponibile al momento.";
}
$conn->close();
?>
