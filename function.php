<?php

include 'connection.php';

    if(isset($_POST['Registration']))
    {
       $fullname=$_POST['fname'];
       $username=$_POST['uname'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $password=md5($password);
       $checkEmail="SELECT * from user where email='$email' ";
       $result=$con->query($checkEmail);
      if($result->num_rows>0){
         echo "email already exists";
      }
      else{
         $insertQuery="INSERT INTO user(fullname,username,email,password) VALUES('$fullname','$username','$email','$password')";
         if($con->query($insertQuery)==TRUE){
            header("location: signup.php");
         }
         else{
            echo "error:" .$con->error;
         }
      }
       }
   if(isset($_POST['login'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      $password=md5($password);
      $sql="SELECT * from user WHERE email='$email' and password='$password";
      $result=$con->query($sql);
      if($result->num_rows>0){
         session_start();
         $row=$result->fetch_assoc();
         $_SESSION['email']=$row['email'];
         header("location:login.php");
         exit();
      }
      else{
         echo "not found";
      }

   }
   ?>

