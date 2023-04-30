<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']==='POST'){
    include 'config.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
$sql= "Select * from `log_form`where username='$username'";
$result=mysqli_query($con,$sql );
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            // echo "user already exist";
            $user=1;
        }else{
            $sql= "insert into `log_form`(username,email,password)values('$username','$email','$password')";
            $result=mysqli_query($con,$sql );
            if($result){
                    // echo "Signup successful";
                    $success=1;
                }else{
                    die(mysqli_error($con));
                }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <style>
      body {
        background-image: url('ef.jpg.jpg');
          background-size: cover;
        
      }
      body {
          background-image: url('ef.jpg.jpg');
          background-size: cover;
        }
        .brand-image{
            width: 100px;
            margin-top:10px;
        }
        
         ul {
	float:right;
    color: #fff;
    margin-top:-45px;
    min-height: 400px;
    font-size:17px;
}
ul li {
	display:inline-block;
    padding : 15px 40px;
}
ul li:hover{
    background-color: #fff;
    color:#000;
}
      </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
if($user){
  echo '<div class="alert alert-danger
   alert-dismissible fade show" role="alert">
  <strong>Ohh no sorry!</strong> user already exist
   <button type="button" class="close" 
   data-dismiss="alert" aria-label="Close"></button>
</div>';  
}
?>

<?php
if($success){
  echo '<div class="alert alert-success
   alert-dismissible fade show" role="alert">
  <strong>success!</strong> You are successfully signed up!
   <button type="button" class="close" 
   data-dismiss="alert" aria-label="Close"></button>
</div>';  
}
?>


    <div class="form-container">
    <form action="" method="post">
    <h3>register now</h3>
    <input type="text" name="username" required placeholder="enter your username">
    <input type="text" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter your password">
    <!-- <input type="password" name="cpassword" required placeholder="confirm your password"> -->
    <!-- <select name="user_type">
        
        <option value="student">student</option>
        <option value="teacher">teacher</option>
</select> -->
<input type="submit" name="submit"value="register now" class="form-btn">
<p>already have an account? <a href="login_form.php">login now</a></p>
</form>
</div>

</body>
</html>