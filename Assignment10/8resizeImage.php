<?php
// Load the source image
$src = imagecreatefromjpeg("garden.jpeg");

// Resize the image to width 200 and height 150
// imagescale maintains aspect ratio by default if only one dimension is given
$new = imagescale($src, 200, 150);

// Set content type header
header("Content-type: image/jpeg");

// Output the resized image
imagejpeg($new);

// Free memory
imagedestroy($src);
imagedestroy($new);
?>

