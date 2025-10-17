<?php
// Load an existing JPEG image
$img = imagecreatefromjpeg("garden.jpeg");

// Set text color (blue)
$color = imagecolorallocate($img, 0, 0, 255);

// Add text at position (10,10) with font size 5
imagestring($img, 5, 10, 10, "VIT Chennai", $color);

// Set content type header
header("Content-type: image/jpeg");

// Output the image
imagejpeg($img);

// Free memory
imagedestroy($img);
?>

