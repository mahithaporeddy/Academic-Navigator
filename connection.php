<?php
$dbhost = "localhost";
$dbuser = "root"; // Assuming default username for MySQL
$dbpass = "";     // Assuming no password for MySQL
$dbname = "login"; // Your database name

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
