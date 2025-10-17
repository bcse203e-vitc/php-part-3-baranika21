<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recipient
    $to = "example@domain.com";

    // Subject
    $sub = "Contact Form Message";

    // Message from form
    $msg = $_POST['message'] ?? "No message provided.";

    // Headers
    $headers = "From: " . ($_POST['email'] ?? "user@domain.com") . "\r\n";
    $headers .= "Reply-To: " . ($_POST['email'] ?? "user@domain.com") . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send mail
    if (mail($to, $sub, $msg, $headers)) {
        echo "✅ Mail Sent!";
    } else {
        echo "❌ Mail failed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Us</h2>
<form method="post">
    Your Email: <input type="email" name="email" required><br><br>
    Message:<br>
    <textarea name="message" rows="5" cols="40" required></textarea><br><br>
    <input type="submit" value="Send">
</form>

</body>
</html>

