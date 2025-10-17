<?php
// Create a 200x200 image
$img = imagecreate(200, 200);

// Set background color (white)
$bg = imagecolorallocate($img, 255, 255, 255);

// Set color for the rectangle (red)
$red = imagecolorallocate($img, 255, 0, 0);

// Draw a rectangle from (50,50) to (150,150)
imagerectangle($img, 50, 50, 150, 150, $red);

// Set content type header
header("Content-type: image/png");

// Output the image
imagepng($img);

// Free memory
imagedestroy($img);
?>

