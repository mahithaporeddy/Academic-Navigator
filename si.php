<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
    <style type="text/css">
        *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}
body {
background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGi4gPwjRV_OZLBzt0llgZxYsgmVRLt9z6gA&s')no-repeat;
background-size:cover;
color: #fff;
}
.registration-form {
position: absolute;
top: 50%;
Left: 50%;
transform: translate(-50%,-50%);
width: 400px;
}
.registration-form h1 {
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
    }
    .registration-form p {
    font-size: 20px;
    margin: 15px 0;
    }
    .registration-form input {
    font-size: 16px;
    padding: 15px 10px;
    width: 100%;
    border: 0;
    border-radius: 5px;
    outline:none;
    }
    .registration-form button {
        font-size: 18px;
        font-weight: bold;
        margin: 20px 0;
        padding: 10px 15px;
        width: 50%;
        border: 0;
        border-radius: 5px;
        background-color:
        #fff;
        }
        I
        .registration-form button :hover {
        color: red;
        }
        </style>
        

<div class="registration-form">
<h1>Registration Form</h1>
<form action="#" method="post">
<p>Full Name:</p>
<input type="text" name="fullname" placeholder="Full Name">
<p>User Name:</p>
<input type="text" name="username" placeholder="User Name">
<p>Email:</p>
<input type="email" name="email" placeholder="Email">
<p>Password:</p>
<input type="password" name="password" placeholder="Password">
<button type="submit">Registration</button>
</form>
</div>
</body>
</html>
</body>
</html>