
<?php
$user = 'root';
$password = '';
$server = 'localhost';
$db = 'bookfiesta';
$conn = new mysqli($server, $user, $password, $db);

if (!$conn)
    echo "Connection Failed <br>";

?>