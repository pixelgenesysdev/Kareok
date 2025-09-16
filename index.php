<!-- redirect to login -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: auth/landing.php");
    exit();
}
?>