<?php
// Create a 400x60 image
$img = imagecreate(400, 60);

// Set background color (light gray)
$bg = imagecolorallocate($img, 240, 240, 240);

// Set text color (black)
$black = imagecolorallocate($img, 0, 0, 0);

// Generate dynamic text with current timestamp
$text = "Generated on " . date("H:i:s");

// Add text to the image at position (10,20)
imagestring($img, 5, 10, 20, $text, $black);

// Set content type header
header("Content-type: image/png");

// Output the image
imagepng($img);

// Free memory
imagedestroy($img);
?>

