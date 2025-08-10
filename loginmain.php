
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
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
            background: url("https://images.pexels.com/photos/1557251/pexels-photo-1557251.jpeg?cs=srgb&dl=pexels-yungsaac-1557251.jpg&fm=jpg") no-repeat center center/cover;
            margin-top: -10px;
            box-sizing: border-box;
            background-size:cover;
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
            color: #fff;
        }

        .box p {
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
     <style type="text/css">
        @import url("https //fonts.googleapis.com/css family=poppins");
*{
 margin: auto;
    
    padding: 0;
    
    box-sizing: border-box;
    
    font-family: 'Poppins', sans-serif;
    }
    section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #000;
    }

.login-box {
position: relative;
width: 400px;
height: 450px;
background: transparent;
border: 2px solid rgba(255, 255, 255, .5);
border-radius: 20px;
display: flex;
justify-content: center;
align-items: center;
background-filter: blur(15px);
}
h2{
    font-size: 2em;
    color: white;
    text-align: center;
}
.input-box {

position: relative;

width: 310px;

margin: 30px 0;

border-bottom: 2px solid #fff;
}
.input-box label {
position: absolute;
top: 50%;
left: 5px;
transform: translateY(-50%);
font-size: 1em;
color: #fff;
pointer-events: none;
transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label {
top: -5px;
}

.input-box input {
width: 100%;
height: 50px;
background: transparent;
border: none;
outline: none;
font-size: 1em;
color: #fff;
padding: 0 35px 0 5px;
}
.input-box .icon {
position: absolute;
right: 8px;
color: #fff;
font-size: 1.2em;
line-height: 57px;
}
.remember-forgot {
    margin: -15px 0 15px;
    font-size:.9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
    }
    .remember-forgot label input {

        justify-content: space-between;
        margin-right: 3px;
        }
        .remember-forgot a {
        color: #fff;        
    text-decoration: none;
    }
        .remember-forgot a:hover{
    text-decoration: underline;}
    button {
        width: 100%;
        height: 40px;
        background:#fff;
        border: none;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 1em;
        color: #000;
        font-weight: 500;}
        .register-link {
           font-size:.9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
            }
            .register-link pa {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            }
            .register-link p a:hover {   
          text-decoration: underline;
            }
            </style>
    
</head>
<body>

<div class="navbar">
    <a href="#">Contact</a>
    <a href="#">Services</a>
    <a href="#">About</a>
    <a href="#">Home</a>
</div>

<div class="banner">
    <h2>ACADEMIC NAVIGATOR</h2>
</div>
<section>
    <div class="login-box">
        <form method="post" action="home.php">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit" name="login">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
            </div>
        </form>
    </div>
</section>



</body>
</html>
