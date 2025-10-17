<?php
// Recipient
$to = "receiver@example.com";

// Subject
$subject = "Test Email";

// Message
$message = "This is a test email from PHP.";

// Headers
$headers = "From: admin@example.com\r\n";
$headers .= "Reply-To: admin@example.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "✅ Mail sent successfully.";
} else {
    echo "❌ Mail failed.";
}
?>

