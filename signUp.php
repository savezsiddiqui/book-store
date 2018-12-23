
<?php

include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$sql = "SELECT * FROM signup WHERE email = '$email';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!empty($row)) {
    echo "<script>
            alert('You are already registered. Please Login.');
            window.location.href='test1.php';
        </script>";
} else {
    $sql = "INSERT INTO signup
            VALUES('$name', '$email', '$password', '$contact', '$city', '$address');";

    if ($conn->query($sql)) {
        session_start();
        $_SESSION['username'] = $email;
        echo "<script>
                alert('SignUp Sucessfull');
                window.location.href='test1.php';
             </script>";
    } else
        echo "<script>
                alert('Error Registering User!');
                window.location.href='test1.php';
             </script>";
}

?>