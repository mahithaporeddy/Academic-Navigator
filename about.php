<?php
session_start();
include("connection.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
     :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --text-color: #fff;
            --background-color: #f8f9fa;
            --navbar-height: 60px;
            --banner-height: 400px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition-speed: 0.3s;
            --border-radius: 10px;
        }
         body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: var(--background-color);
            color: var(--text-color);
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
            height: var(--banner-height);
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: var(--navbar-height);
            position: sticky;
            top: var(--navbar-height);
            color: var(--text-color);
            text-align: center;
            z-index: 500;
        }
.about .row .box img {
    margin-bottom: 2rem;
    height: 40rem;
}
* {
    font-family: 'Rubik', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    color: var(--black);
}
img {
    overflow-clip-margin: content-box;
    overflow: clip;
}
.about .row .box {
    flex: 1 1 40rem;
    text-align: center;
}
:root {
    --green: #27ae60;
    --orange: #f39c12;
    --red: #e74c3c;
    --black: #333;
    --light-color: #666;
    --white: #fff;
    --light-bg: #f6f6f6;
    --border: .2rem solid var(--black);
    --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}
:host, :root {
    --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Free";
}
:host, :root {
    --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Free";
}
:host, :root {
    --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
}
@media (max-width: 991px) {
    html {
        font-size: 55%;
    }
}
html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 6.5rem;
}
*::-webkit-scrollbar {
    height: .5rem;
    width: 1rem;
}
*::-webkit-scrollbar-thumb {
    background-color: var(--green);
}
*::-webkit-scrollbar-track {
    background-color: transparent;
}
*::selection {
    background-color: var(--green);
    color: var(--white);
}
</style>

<body>


<div class="navbar">
    <div class="logo">Academic Navigator</div>
    <div>
        <a href="home.php">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="banner">
    <h2>Welcome to Academic Navigator</h2>
</div>
<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/aboutimg.png" alt="">
         <h3>Why Choose Us?</h3>
         <p>Academic Navigator provides the information of courses
 right after passing the 10th. It not only provides the information 
about courses it tell  which entrance,college should be choosen . 
so, that student can choose their own course without any confusion.
we also provide colleges. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>


   </div>

</section>


<?php include 'footer.php'; ?>
</body>
</html>
