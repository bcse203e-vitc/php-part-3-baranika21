<?php
// Check if the 'visits' cookie exists
if (isset($_COOKIE['visits'])) {
    // Increment the visit count
    $count = $_COOKIE['visits'] + 1;
} else {
    // Set to 1 for the first visit
    $count = 1;
}

// Set or update the cookie with a 1-hour expiry
setcookie('visits', $count, time() + 3600);

// Display the message to the user
echo "Welcome! You have visited this page $count times.";
?>

