<?php
session_start();

$isbn = $_GET['isbn'];
include 'connection.php';

if (!isset($_SESSION['username'])) {
    die("please login first");
}

$sql = "UPDATE books SET qty = qty - 1 WHERE isbn = '$isbn';";
$sql1 = "SELECT qty FROM books WHERE isbn = '$isbn';";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();
if ($row['qty'] == 1) {
    $sql = "DELETE from books where isbn = '$isbn';";
}

if ($conn->query($sql))
    echo "<script>
            alert('Book Purchased Successfully');
            window.location.href='test1.php';
          </script>";
?>