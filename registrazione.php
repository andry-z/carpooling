<!DOCTYPE html>
<html>
<head>
    <title>Registrazione</title>
</head>
<body>
    <h2>Registrazione Autista</h2>
    <form action="registro.php" method="post">
        <!-- campi per la registrazione dell'autista -->
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="cognome" placeholder="Cognome" required>
        <input type="text" name="automobile" placeholder="Automobile" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="recapito_telefonico" placeholder="Telefono" required>
        <input type="text" name="fotografia" placeholder="Fotografia" required>
        <input type="text" name="numero_patente" required>
        <input type="date" name="scadenza_patente" required>
        <input type="submit" name="registra_autista" value="Registra Autista">
    </form>

    <h2>Registrazione Passeggero</h2>
    <form action="registro.php" method="post">
        <!-- campi per la registrazione del passeggero -->
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="cognome" placeholder="Cognome" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="text" name="recapito_telefonico" placeholder="Telefono" required>
        <input type="text" name="documento_identità" required>
        <input type="submit" name="registra_passeggero" value="Registra Passeggero">
    </form>
</body>
</html>
