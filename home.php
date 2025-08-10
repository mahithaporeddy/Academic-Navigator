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
    <style>
        html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
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
            padding: 0;
            background: var(--background-color);
            color: var(--text-color);
            scroll-behavior: smooth;
            overflow-x:hidden;
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

        .banner {
            height: 800px;
            width:1800px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: var(--navbar-height);
            color: var(--text-color);
            text-align: center;
            z-index: 500;
            overflow-x:hidden;
        }

        .banner h2 {
            font-size: 48px;
            letter-spacing: 1px;
            font-weight: bold;
            animation: fadeIn var(--transition-speed) ease-in-out;
        }

        .description {
            background-color: var(--background-color);
            padding: 20px;
            text-align: center;
            font-size: 18px;
            margin: 20px auto;
            width: 80%;
            box-shadow: var(--box-shadow);
            border-radius: var(--border-radius);
            animation: slideIn var(--transition-speed) ease-in-out;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            color: #333;
            width: 350px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: transform var(--transition-speed), box-shadow var(--transition-speed);
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: opacity var(--transition-speed);
        }

        .card:hover img {
            opacity: 0.9;
        }

        .card .content {
            padding: 20px;
            text-align: center;
        }

        .card h2 {
            margin: 0;
            font-size: 22px;
            color: var(--primary-color);
            padding: 10px 0;
        }

        .card p {
            margin: 10px 0;
            font-size: 16px;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            color: var(--text-color);
            background-color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
            border: 2px solid var(--primary-color);
            border-radius: var(--border-radius);
            transition: background-color var(--transition-speed), color var(--transition-speed);
        }

        .card a:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--text-color);
        }

        @media (max-width: 768px) {
            .banner h2 {
                font-size: 32px;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
        <script>
        function confirmLogout(event) {
            event.preventDefault(); // Prevent the default form submission
            var confirmed = confirm("Are you sure you want to logout?");
            if (confirmed) {
                window.location.href = 'logout.php';
            }
        }
    </script>
</head>
<body>

<div class="navbar">
    <div class="logo">Academic Navigator</div>
    <div>
        <a href="home.php">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="logout.php"onclick="confirmLogout(event)">Logout</a>
    </div>
</div>

<div class="banner">
    <h2>Academic Navigator</h2>
</div>


<div class="description">
    <p>Welcome to Academic Navigator, your comprehensive guide for navigating educational and career choices. Whether you're deciding on your next steps after high school, exploring different colleges, or preparing for entrance exams, we're here to provide you with the information and resources you need to make informed decisions. Let's embark on this journey together and chart a path towards a successful future.</p>
</div>

<div class="container">
    <a href="/index/After10th2.php" class="card">
        <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg" alt="After 10th">
        <div class="content">
            <h2>After 10th</h2>
            <p>Want to know what to choose after 10th?</p>
            <a href="/index/After10th2.php">Learn More</a>
        </div>
    </a>
    <a href="/index/Afterinter.php" class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmGQBTp4Ta3zX7sDwuU6pnfjI4SVYeBWgsUw&s" alt="After Intermediate">
        <div class="content">
            <h2>After Intermediate</h2>
            <p>Explore your options after intermediate studies.</p>
            <a href="/index/Afterinter.php">Learn More</a>
        </div>
    </a>
    <a href="/index/entranceTests.php" class="card">
        <img src="https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg" alt="Entrance Tests">
        <div class="content">
            <h2>Entrance Tests</h2>
            <p>Information on various entrance tests.</p>
            <a href="/index/entranceTests.php">Learn More</a>
        </div>
    </a>
    <a href="/index/colleges.php" class="card">
        <img src="https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg" alt="Colleges">
        <div class="content">
            <h2>Colleges</h2>
            <p>Find the best colleges for your career.</p>
            <a href="/index/colleges.php">Learn More</a>
        </div>
    </a>
</div>
</body>
</html>
