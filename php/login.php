<?php
session_start();
$con=mysqli_connect("localhost","root","","dbusers");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * from users WHERE email='$email' and password='$password' ";
$query=mysqli_query($con,$sql);
$num_rows=mysqli_num_rows($query);
if(mysqli_query($con,$sql)){
    header("location:profile.html");
} 
else{
    header("location:login.html");

}

//Redis

$redis = new Redis();
$redis->connect('127.0.0.1',27017);
session_set_save_handler(
  array($redis, 'open'),
  array($redis, 'close'),
  array($redis, 'read'),
  array($redis, 'write'),
  array($redis, 'destroy'),
  array($redis, 'gc')
);
session_start();
?>








