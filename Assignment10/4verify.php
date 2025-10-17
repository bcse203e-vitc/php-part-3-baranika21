<?php
session_start();

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['captcha_input']) && $_POST['captcha_input'] == $_SESSION['captcha']) {
        $message = "✅ CAPTCHA Verified Successfully!";
    } else {
        $message = "❌ Incorrect CAPTCHA. Try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CAPTCHA Verification</title>
</head>
<body>
    <form method="post">
        <p><img src="4captcha.php" alt="CAPTCHA Image"></p>
        <label>Enter CAPTCHA:</label>
        <input type="text" name="captcha_input" required>
        <br><br>
        <input type="submit" value="Verify">
    </form>

    <p><?php echo $message; ?></p>
</body>
</html>

