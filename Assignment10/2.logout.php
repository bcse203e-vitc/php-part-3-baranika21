<?php
session_start();
session_unset();
session_destroy();
header("Location: 2login.php");
exit();
?>

