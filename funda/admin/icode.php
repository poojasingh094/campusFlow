<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['user']) && isset($_POST['ids'])) { 
  $names = $_POST['choose'];
  $ids = implode(',', $_POST['ids']); 
  $user_query = "UPDATE apply_form SET selection = '$names' WHERE id IN ($ids)";
  $user_query_run = mysqli_query($con, $user_query);
  if(!$user_query_run) {
      $_SESSION['status'] = "User registration failed";
      header("Location: Application.php");
      exit();
  }
  $_SESSION['selected_value'] = $names;
  $_SESSION['status'] = "Selection updated successfully";
  header("Location: Application.php");
  exit();
} else {
  $_SESSION['status'] = "Invalid request";
  header("Location: Application.php");
  exit();
}


?>


