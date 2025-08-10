
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
            color: #fff;
        }

        .navbar {
            background-color: #444;
            overflow: hidden;
            padding: 10px 20px;
        }

        .navbar a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .banner {
            width: 100%;
            height: 500px;
            background: url('https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg') no-repeat center center/cover;
            margin-top: -125px;
            opacity:0.8;
        }
      
        .banner h2{
            text-align: center;
           font-size: 150px;
           letter-spacing:5px;
           font-weight:bold;
           padding-top:20px;
           
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .box {
            width: 45%;
            height: 400px;
            background-color: #fff;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            opacity: 2.8;
        }

        .box .content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
        }

        .box h2 {
            margin: 0;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
            color: white;
        }

        .box a {
            color: #fff;
            font-size: 18px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .box {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<div class="navbar">
    <a href="index.php">Logout</a>
    <a href="#">Services</a>
    <a href="#">About</a>
    <a href="index.php">Home</a>
</div>

<div class="banner">
    <h2>ACADEMIC NAVIGATOR</h2>
   
    
</div>

<div class="container">
    <div class="box">
        <img src="https://watermark.lovepik.com/photo/50142/8042.jpg_wh1200.jpg" alt="After 10th">
        <div class="content">
            <h2>AFTER 10TH</h2>
            <a href=''>Want to know what to choose after 10th?</a>
        </div>
    </div>
    <div class="box" >
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmGQBTp4Ta3zX7sDwuU6pnfjI4SVYeBWgsUw&s" alt="After Intermediate">
        <div class="content">
            <h2>AFTER INTERMEDIATE</h2>
            <a href=''>Explore your options after intermediate studies.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="box" onclick="redirectTo('entranceTests')">
        <img src="https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg" alt="Entrance Tests">
        <div class="content">
            <h2>ENTRANCE TESTS</h2>
            <p>Information on various entrance tests.</p>
        </div>
    </div>
    <div class="box" onclick="redirectTo('colleges')">
        <img src="https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg" alt="Colleges">
        <div class="content">
            <h2>COLLEGES</h2>
            <p>Find the best colleges for your career.</p>
        </div>
    </div>
</div>
</body>
</html>
