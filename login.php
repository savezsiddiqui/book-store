<?php
include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM signup WHERE email = '$email';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!empty($row)) {
    if ($password == $row['password']) {
        session_start();
        $_SESSION['username'] = $row['email'];
        echo "<script>
                window.location.href='test1.php';
             </script>";
    } else
        echo "<script>
                alert('Incorrect Password');
                window.location.href='test1.php';
             </script>";
} else {
    echo "<script>
            alert('email not registered');
            window.location.href='test1.php';
         </script>";
}

?>