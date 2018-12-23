<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('test1.php');
} else {
    session_destroy();
    echo "<script> window.location.href = 'test1.php';</script>";
}
?>
