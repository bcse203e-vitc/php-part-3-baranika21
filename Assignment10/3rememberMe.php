<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // If "Remember Me" is checked, store username in a cookie
    if (isset($_POST['remember'])) {
        setcookie('username', $_POST['username'], time() + (86400), "/"); // 1 day
    }
}

// Get name from cookie or set as Guest
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : 'Guest';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>
    <h3>Welcome <?php echo $username; ?>!</h3>

    <!-- Form to enter username and select "Remember Me" -->
    <form method="post">
        <label>Username: </label>
        <input type="text" name="username" required>

        <br><br>
        <input type="checkbox" name="remember"> Remember Me

        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

