<?php
include 'config.php';

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM passeggeri WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    echo mysqli_num_rows($result);


    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id']; // Memorizza l'ID dell'utente nella sessione
        header("Location: dashboard.php"); // Reindirizza alla dashboard dopo il login
    } else if(mysqli_num_rows($result) == 0) {
        $sql = "SELECT * FROM autisti WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['id']; // Memorizza l'ID dell'utente nella sessione
            header("Location: dashboard.php"); // Reindirizza alla dashboard dopo il login
        } else {
            echo "Email o password non valide.";
        }
        echo "Email o password non valide.";
    }
}

if (isset($_POST['logout'])) {
    session_unset(); // Cancella tutte le variabili di sessione
    session_destroy(); // Distrugge la sessione
    header("Location: login.php"); // Reindirizza alla pagina di login dopo il logout
}

$conn->close();
?>
