<?php
// Start the session
session_start();

// Set a default name if not already set
if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = "Student";
}

// Display personalized greeting
echo "Hello, " . $_SESSION['name'] . "! Welcome to the PHP lab.";
?>

