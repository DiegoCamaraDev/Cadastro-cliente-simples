<?php
$servername = "127.0.0.1";
$username = "root";
$password = "120559";
$dbname = "user_registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>