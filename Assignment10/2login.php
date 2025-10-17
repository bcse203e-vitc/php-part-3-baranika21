<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check credentials
    if ($_POST['user'] == "admin" && $_POST['pass'] == "1234") {
        $_SESSION['user'] = "admin";
        header("Location: 2welcome.php");
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post">
        Username: <input type="text" name="user" required><br><br>
        Password: <input type="password" name="pass" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

