<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    login_user($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Navigator</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="styles.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #388E3C;
            --text-color: #333;
            --background-color: #f4f4f9;
            --navbar-height: 60px;
            --banner-height: 400px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition-speed: 0.3s;
            --border-radius: 8px;
            --font-family: 'Roboto', sans-serif;
        }

        body {
            font-family: var(--font-family);
            margin: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg') no-repeat center center/cover;
            display: flex;
            padding: 0;
           object-fit:cover;
           background-attachment: fixed;
            color: var(--text-color);
            scroll-behavior: smooth;
            display: flex;
            justify-content: center;
            align-items: left;
          padding-top:250px;
        }
        body h2{
            font-size: 48px;
            letter-spacing: 1px;
         color: grey;
            font-weight: bold;
            animation: fadeIn var(--transition-speed) ease-in-out;
           
        }
        body p{
            font-size: 16px;
            color:white;
            letter-spacing: 1px;
            align:center;
        }

        .navbar {
            background-color: var(--primary-color);
            height: var(--navbar-height);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: var(--box-shadow);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--text-color);
        }

        .navbar a {
            color: var(--text-color);
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color var(--transition-speed);
        }

        .navbar a:hover {
            background-color: var(--secondary-color);
            border-radius: var(--border-radius);
        }

      
        </style>
</head>


<div class="navbar">
    <div class="logo">Academic Navigator</div>
    <div>
        <a href="home.php">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<body>
    <h2>Academic Navigator</h2>
    <p>Want to know more?</p>

</body>

</html>