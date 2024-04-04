<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Reindirizza alla pagina di login se l'utente non è autenticato
}

// Altre operazioni della dashboard possono essere aggiunte qui

echo "Benvenuto nella dashboard!";
echo "<br>";
echo "<a href='formviaggio.php'>Inserisci un viaggio</a>";

echo "<form action='auth.php' method='post'>";
echo "<input type='submit' name='logout' value='Logout'>";
echo "</form>";
?>
