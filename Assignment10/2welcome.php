<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    echo "Access denied. Please <a href='login.php'>login</a>.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <a href="2logout.php">Logout</a>
</body>
</html>

