<?php
// Create a 250x250 image
$img = imagecreate(250, 250);

// Set background color (white)
$bg = imagecolorallocate($img, 255, 255, 255);

// Draw 10 random filled ellipses with random colors
for ($i = 0; $i < 10; $i++) {
    // Generate random color
    $color = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));

    // Draw filled ellipse at random position
    imagefilledellipse(
        $img,
        rand(20, 230), // x-coordinate
        rand(20, 230), // y-coordinate
        50,            // width
        50,            // height
        $color
    );
}

// Set content type header
header("Content-type: image/png");

// Output the image
imagepng($img);

// Free memory
imagedestroy($img);
?>

