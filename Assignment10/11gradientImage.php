<?php
// Create a 200x200 image
$img = imagecreate(200, 200);

// Loop through each vertical line
for ($i = 0; $i < 200; $i++) {
    // Create a gradient color from black to blue
    $col = imagecolorallocate($img, $i, $i, 255);

    // Draw a vertical line at position $i
    imageline($img, $i, 0, $i, 200, $col);
}

// Set content type header
header("Content-type: image/png");

// Output the image
imagepng($img);

// Free memory
imagedestroy($img);
?>

