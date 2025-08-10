<?php
$fullname = $username = $email = $password = "";
$connect = mysqli_connect("localhost", "root", " ", "login_sample_db");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection was successful..!<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Add your database insert code here if needed
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method="POST">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="fullname"><br>
        
        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br>
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email"><br>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        
        <input type="submit" id="submit"><br>
    </form>
</body>
</html>
