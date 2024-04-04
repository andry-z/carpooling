<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci viaggio</title>
</head>
<body>
    <form action="inserisci_viaggio.php" method="POST">
        <label for="autista_id">ID Autista:</label>
        <input type="text" id="autista_id" name="autista_id" required><br><br>
        
        <label for="citta_partenza">Partenza:</label>
        <input type="text" id="citta_partenza" name="citta_partenza" required><br><br>
        
        <label for="citta_destinazione">Destinazione:</label>
        <input type="text" id="citta_destinazione" name="citta_destinazione" required><br><br>
        
        <label for="time">Data e ora partenza:</label>
        <input type="time" id="data_ora_partenza" name="data_ora_partenza" required><br><br>
        
        <label for="contributo_economico">Contributo economico:</label>
        <input type="number" id="contributo_economico" name="contributo_economico" required><br><br>
    
        <label for="tempi_percorrenza_stimati">Tempi di percorrenza stimati:</label>
        <input type="text" id="tempi_percorrenza_stimati" name="tempi_percorrenza_stimati" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>