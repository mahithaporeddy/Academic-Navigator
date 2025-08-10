<?php
session_start();
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    register_user($con);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Poppins");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("bg2.jpg");
    background-repeat:no-repeat;
    background-size:cover;
        }

        .registration-form {
            width: 400px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            padding: 30px;
            background-filter: blur(15px);
        }

        .registration-form h1 {
            font-size: 2em;
            text-align: center;
            margin-bottom: 20px;
        }

        .registration-form p {
            font-size: 1em;
            margin-bottom: 10px;
        }

        .registration-form input {
            width: 100%;
            height: 40px;
            padding: 0 10px;
            margin-bottom: 15px;
            border: none;
            border-bottom: 2px solid black;
            outline: none;
            background: transparent;
            color: black;
            font-size: 1em;
        }

        .registration-form button {
            width: 100%;
            height: 40px;
            margin-top: 20px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            font-weight: 500;
            color: #000;
        }

        .registration-form button:hover {
            background: #ccc;
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
            background: #444;
        }

        .registration-form .password-box {
            position: relative;
        }

        .registration-form .password-box .icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            cursor: pointer;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<div class="registration-form">
    <h1>Registration Form</h1>
    
    <form method="post" action="signup.php">
        <p>Full Name:</p>
        <input type="text" name="fullname" placeholder="Full Name" required>
        <p>User Name:</p>
        <input type="text" name="username" placeholder="User Name" required>
        <p>Email:</p>
        <input type="email" name="email" placeholder="Email" required>
        <p>Password:</p>
        <div class="password-box">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <ion-icon name="eye" class="icon" id="eyeIcon" onclick="togglePassword()"></ion-icon>
        </div>
             <button type="submit" name="Registration">Register</button>
       

    </form>
</div>
<div id="successPopup" class="popup">
    <p>Registration Successful!</p>
    <button onclick="closePopup()">Close</button>
</div>
<script>
      function showSuccessPopup() {
            var popup = document.getElementById('successPopup');
            popup.style.display = 'block';
        }

        function closePopup() {
            var popup = document.getElementById('successPopup');
            popup.style.display = 'none';
            window.location.href ="index.php";
           
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
<script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
