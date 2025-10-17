<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {

        // Absolute path to uploads folder
        $upload_dir = __DIR__ . "/uploads/";

        // Create uploads folder if it doesn't exist
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $target_file = $upload_dir . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            echo "<h3>✅ Image Uploaded Successfully!</h3>";
            echo "<img src='uploads/" . basename($_FILES['file']['name']) . "' width='200'>";
        } else {
            echo "❌ Failed to move the uploaded file.";
        }

    } else {
        echo "❌ File upload error.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload and Display Image</title>
</head>
<body>

<h2>Upload an Image</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept="image/*" required>
    <br><br>
    <input type="submit" value="Upload">
</form>

</body>
</html>

