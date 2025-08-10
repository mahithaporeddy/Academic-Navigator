<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    login_user($con);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
    background: url("bg2.jpg");
    background-repeat:no-repeat;
    background-size:cover;
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
    color: black;
    text-align: center;
}
.input-box {

position: relative;

width: 310px;

margin: 30px 0;

border-bottom: 2px solid black;
}
.input-box label {
position: absolute;
top: 50%;
left: 5px;
transform: translateY(-50%);
font-size: 1em;
color: black;
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
color: black;
padding: 0 35px 0 5px;
}
.input-box .icon {
position: absolute;
right: 8px;
color: black;
font-size: 1.2em;
line-height: 57px;
}
.remember-forgot {
    margin: -15px 0 15px;
    font-size:.9em;
    color: black;
    display: flex;
    justify-content: space-between;
    }
    .remember-forgot label input {

        justify-content: space-between;
        margin-right: 3px;
        }
        .remember-forgot a {
        color: black;        
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
            color: black;
            text-align: center;
            margin: 25px 0 10px;
            }
            .register-link pa {
            color: black;
            text-decoration: none;
            font-weight: 600;
            }
            .register-link p a:hover {   
          text-decoration: underline;
            }
            .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: #fff;
            color: #000;
            border: 2px solid #000;
            border-radius: 10px;
            text-align: center;
            display: none;
        }

        .popup button {
            margin-top: 10px;
            padding: 10px 20px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background: white;
        }
      
            </style>
</head>
<script>
        function showSuccessPopup() {
            var popup = document.getElementById('successPopup');
            popup.style.display = 'block';
            // Redirects after 3 seconds
        }

        function closePopup() {
            var popup = document.getElementById('successPopup');
            popup.style.display = 'none';
            window.location.href ="nav.php";
        }
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.name = 'eye-off';
            } else {
                passwordInput.type = 'password';
                eyeIcon.name = 'eye';
            }
        }
    </script>
</head>
<body>
<section>
    <div class="login-box">
        <form method="post" action="index.php">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" required>
                <label>Password</label>
                <span class="icon" id="eyeIcon" onclick="togglePassword()"><ion-icon name="eye"></ion-icon></span>
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

<div id="successPopup" class="popup">
    <p>Login Successful!</p>
    <button onclick="closePopup()">Close</button>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>