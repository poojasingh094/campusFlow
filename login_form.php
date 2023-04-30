<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
$sql="Select * from `log_form`where email='$email' and password='$password'";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_array($result);
    // if($row['user_type']=='admin'){
    //     $_SESSION['admin_name']=$row['username'];
    //     header('location:admin_page.php');
    // }elseif($row['user_type']=='teacher'){
    //     $_SESSION['teacher_name']=$row['username'];
    //     header('location:teacher_page.php');
  //  }elseif($row['user_type']=='student'){
  //   $_SESSION['student_name']=$row['username'];
  //   header('location:student_page.php');
  }else{
    $error[]='incorrect email or password!';
  }
}
;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
    <form action="funda/user/index.php" method="post">
    <h3>login now</h3>
    <input type="email" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter your password">
   
<input type="submit" name="submit"value="login now" class="form-btn">
<p>don't have an account? <a href="register_form.php">register now</a></p>
</form>
</div>

</body>
</html>