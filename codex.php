<?php
session_start();
include('config.php');
if(isset($_POST['add']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $program=$_POST['program'];
    $specialization=$_POST['spec'];
    $department=$_POST['department'];
    $user_query="INSERT INTO register (name,email, phone,state, city, program, spec, department) VALUES ('$name','$email','$phone','$state','$city','$program','$specialization','$department')";
    $user_query_run=mysqli_query($con, $user_query);
    if($user_query_run)
    {
        $_SESSION['status']="user added successfully";
        header("location:funda/user/index.php");
    }
    else{
        $_SESSION['status']="user registeration failed";
        header("location:index.php");
    }
}
?>