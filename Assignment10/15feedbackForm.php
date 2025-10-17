<?php
session_start();

// Set a default user for demonstration
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = "Guest";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_SESSION['user'];
    $feedback = $_POST['feedback'] ?? "";

    // Compose message
    $msg = "Feedback from $name: " . $feedback;

    // Send email
    $to = "admin@vit.ac.in";
    $subject = "Student Feedback";
    $headers = "From: noreply@vit.ac.in\r\n";
    $headers .= "Reply-To: noreply@vit.ac.in\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $msg, $headers)) {
        echo "✅ Thank you, $name. Feedback sent!";
    } else {
        echo "❌ Mail failed. Feedback not sent.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<h2>Student Feedback Form</h2>
<p>Hello, <?php echo $_SESSION['user']; ?>. Please provide your feedback below:</p>

<form method="post">
    <textarea name="feedback" rows="5" cols="50" placeholder="Enter your feedback here..." required></textarea><br><br>
    <input type="submit" value="Submit Feedback">
</form>

</body>
</html>

