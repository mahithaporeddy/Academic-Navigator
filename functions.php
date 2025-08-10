<?php
include 'connection.php';

function register_user($con) {
    if (isset($_POST['Registration'])) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $checkEmail = $con->prepare("SELECT * FROM user WHERE email = ?");
        $checkEmail->bind_param('s', $email);
        $checkEmail->execute();
        $result = $checkEmail->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('Email already exists.Please enter new email.');</script>";
        } else {
            $insertQuery = $con->prepare("INSERT INTO user (fullname, username, email, password) VALUES (?, ?, ?, ?)");
            $insertQuery->bind_param('ssss', $fullname, $username, $email, $passwordHash);

            if ($insertQuery->execute()) {
                echo "<script>window.onload = function() { showSuccessPopup(); }</script>";
                
            } else {
                echo "Error: " . $con->error;
            }
        }
        
    }}


function login_user($con) {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = $con->prepare("SELECT * FROM user WHERE email = ?");
        $sql->bind_param('s', $email);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $row['email'];
                echo "<script>window.onload = function() { showSuccessPopup(); }</script>";
            } else {
                echo "<script>alert('Invalid email or password');</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    }
}

function feedback($con){
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];
// Prepare and bind
$stmt = $con->prepare("INSERT INTO feedback (rating, feedback) VALUES (?, ?)");
$stmt->bind_param("is",$rating, $feedback);
if ($stmt->execute()) {
    echo "<script>alert('Thank you for your feedback!');</script>";
} else {
    echo "Error: " . $con->error;
}

mysqli_close($con);}