<?php
session_start();
include "connection.php";

if (!isset($_SESSION['username'])) {
    die("please login first");
}

$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$desc = $_POST['desc'];
$img_name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "uploads/" . $img_name);

$sql = "SELECT * from books where isbn = '$isbn';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!empty($row)) {

    $sql = "UPDATE books
        SET qty = qty + $qty 
        WHERE isbn = '$isbn';";
} else {
    $sql = "INSERT INTO books 
        VALUES('$name', $price, $qty, '$author','$desc','$isbn', '$img_name');";
}

if ($conn->query($sql))
    echo "<script>
                alert('Books Added Successfully');
                window.location.href='test1.php';
             </script>";

$conn->close();
?>