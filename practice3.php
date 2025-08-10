<?php
echo "hi";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$connect = mysqli_connect("localhost", "root", "mahi", "login_sample_db");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection was successful..!<br>";
}
?>