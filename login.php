<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="auth.php" method="post">
        <label>Email:</label><br>
        <input type="text" name="email" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
    <p>Non hai un account? <a href="registrazione.php">Registrati</a></p>
</body>
</html>
