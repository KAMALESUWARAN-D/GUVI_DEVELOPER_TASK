<?php
session_start();
$con=mysqli_connect("localhost","root","","dbusers");
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['confirm-pass'];
$sql="INSERT INTO users (email,password,cpassword) VALUES ('$email','$password','$cpassword') ";
if(mysqli_query($con,$sql)){
    header("location:login.html");
            
} 
else{  
    echo "Error occured";
}

?>
