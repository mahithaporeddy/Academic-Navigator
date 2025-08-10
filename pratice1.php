<?php

$fullname = $username = $email = $password = "";
$connect=mysqli_connect("localhost","root","","login_sample_db");
//$connect=mysqli_connect("localhost","root","","varshitha");
//if (isset($POST["submit"]))
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$fullname=$_POST["fullname"];
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
}


if(!$connect){
    die("there is an error".mysqli_connect_error());
  
}
else{
   echo "connection was successfull..!<br>";
}


$sql1 = "INSERT INTO new_user (S.NO, Name, DOB, Gender, Qualification) VALUES (NULL, '$name', '$dob', '$gender', '$qualification')";
 $sql1="INSERT INTO `login_sample_db` (`id`, `fullname`, `username`, `email`, `password`) VALUES (NULL, 'varshitha', 'varshitha', 'varshithapoloju@gmail.com', '1234')";

$result1 = mysqli_query($connect, $sql1);

if ($result1) {
    echo "Record insertion was successful..!<br>";
} else {
    echo "The record was not inserted successfully...! because of the error: " . mysqli_error($connect);
    echo "<br>";
}



//$sql="SELECT jobs FROM job_listing WHERE Qualification= '$qualification'";

//$result=mysqli_query($connect,$sql);



//if(mysqli_num_rows($result)>0){
  //  $jobs=mysqli_fetch_assoc($result)["jobs"];
    //echo "hello $name,you are eligible for $jobs";
//}
//else{
  //   echo "sorry we dont have any jobs for ur qualification ....!";
     
//}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form method="POST"  >
        <label for"name">Name</label>
        <input type="text" id="name" name="name"><br>
        <label for"qualification">qualification</label>
        <input type="text" id="qualification" name="qualification"><br>
        <label for"dob">dob</label>
        <input type="date" id="dob" name="dob"><br>
        <label for"gender">gender</label>
        <input type="text "id="gender" name="gender"><br>
        <input type="submit" id="submit" name="submit"><br>

    </form>
</body>
</html>