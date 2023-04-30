<?php
session_start();
include('config/dbcon.php');
if(isset($_POST['addUser']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_query="INSERT INTO users (name,phone,email,password) VALUES ('$name','$Phone','$email','$password')";
    $user_query_run=mysqli_query($con, $user_query);
    if($user_query_run)
    {
        $_SESSION['status']="user added successfully";
        header("location:registered.php");
    }
    else{
        $_SESSION['status']="user registeration failed";
        header("location:registered.php");
    }
}
?>