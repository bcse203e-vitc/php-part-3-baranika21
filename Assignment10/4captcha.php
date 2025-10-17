<?php
session_start();

// Generate a random 4-digit CAPTCHA
$captcha = rand(1000, 9999);
$_SESSION['captcha'] = $captcha;

// Create image
$image = imagecreate(70, 30);

// Background color (white)
$bg = imagecolorallocate($image, 255, 255, 255);

// Text color (black)
$text = imagecolorallocate($image, 0, 0, 0);

// Add CAPTCHA text to image
imagestring($image, 5, 10, 5, $captcha, $text);

// Output the image as PNG
header("Content-type: image/png");
imagepng($image);

// Free memory
imagedestroy($image);
?>

