<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    <script src="code.php"></script>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #d3d3d3;
}
.content-wrapper{
  /* background-color: #d3d3d3; */
}
* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  max-width:930px;
  background-color: white;
  /* text-align: center; */
  margin-left:50px;
  border-radius:5px;
    box-shadow: 0 5px 10px rgba(0,0,0,1);
    margin-top:30px;

}
input[type="checkbox"] {
  border-radius: 50%;
  width: 1.2em;
  height: 1.2em;
  border: 2px solid #aaa;
  background-color: #fff;
  cursor: pointer;
}

input[type="checkbox"]:checked {
  /* background-color: #00bfff; */
  border-color: #00bfff;
}

input {
  width: 100%;
  padding: 15px;
  /* margin: 5px 0 22px 0; */
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 110px;
  opacity: 0.9;
}


.registerbtn:hover {
  opacity: 1;
}

</style>
</head>
<body>
<div class="content-wrapper">
<form action="code.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Admission Form</h1>
    <p>Please fill in this form to apply for the admission.</p>
    <hr>
    <div class="row mb-2">
          <div class="col-sm-6">
<?php 
if(isset($_SESSION['status']))
{
  echo "<h4>".$_SESSION['status']."</h4>";
  unset($_SESSION['status']);
}
?>

<table>
  <tr>
    <td>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required style="width: 438px; height: 50px;"><br><br>
</td>
<td>
<label  style="margin-left: 45px;">Category:</label>
<input list="cat" placeholder="Select Category" name="cat" type="text" required style="width: 380px; margin-left: 45px; height: 50px;"/>
<datalist id="cat">
  <option value="General">
  <option value="OBC">
  <option value="SC/ST">
</datalist>
</td>
</tr>
</table>
<table>
  <tr>
    <td>
  <label for="fname">Father's Name:</label>
  <input type="text" id="fname" name="fname" required style="width: 438px; height: 50px;"><br><br>
<td>
<label  style="margin-left: 45px;">Program:</label>
<input list="pro" placeholder="Select Program" name="pro" type="text" required style="width: 380px; margin-left: 45px; height: 50px;"/>
<datalist id="pro">
  <option value="Bachelors">
  <option value="Masters">
  <option value="PhD">
</datalist>
<td>

</td>
</tr>
</table>

<table>
  <tr>
    <td>
  <label for="mname">Mother's Name:</label>
  <input type="text" id="mname" name="mname" required style="width: 438px; height: 50px;"><br><br>
</td>
<td>
<label style="margin-left: 45px;">Courses:</label>
<input list="course" placeholder="Select Course" name="course" type="text" required style="width: 380px; margin-left: 45px; height: 50px;"/>
<datalist id="course">
  <option value="Btech">
  <option value="Mtech">
  <option value="Pharmacy">
  <option value="MBBS">
  <option value="BBA">
  <option value="MBA">
</datalist>  
</td>
</tr>
</table>


  <label for="nation">Nationality:</label>
  <input type="text" id="nation" name="nation" required><br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required><br><br>

  <label for="gender">Gender:</label><br>
  <label>
    <input type="radio" name="gender" value="male">
    Male
  </label>
  <label>
    <input type="radio" name="gender" value="female">
    Female
  </label>
  <label>
    <input type="radio" name="gender" value="other">
    Other
  </label>
  <br><br>

  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob" required><br><br>

  <label for="address">Correspondence Address:</label>
  <textarea id="address" name="address" required rows="4" cols="50"></textarea><br><br>
         
<table>
    <tr>
    <th>Level</th>
      <th>Board/University</th>
      <th>Year</th>
      <th>Percentage</th>
      <th>Stream</th>
    </tr>
    <tr>
    <td> <h6> 10th(Secondary):</h6></td>
    <td> <input type="text" name="degree" placeholder="Board/University" style="width: 180px; height: 50px;"></td>
      <td><input  type="text" name="year" placeholder="Year" style="width: 180px; height: 50px;"></td>
      <td><input type="text" name="percentage" placeholder="Percentage" style="width: 180px; height: 50px;"></td>
      <td><input type="text" name="stream" placeholder="Stream" style="width: 180px; height: 50px;"></td>
      
    </tr>
    <tr>
    <td> <h6> 12th(SeniorSecondary):</h6></td>
    <td><input type="text" name="degre" placeholder="Board/University" style="width: 180px; height: 50px;"></td>
      <td><input type="text" name="yea" placeholder="Year" style="width: 180px; height: 50px;"></td>
      <td><input type="text" name="percentag" placeholder="Percentage" style="width: 180px; height: 50px;"></td>
      <td><input type="text" name="strea" placeholder="Stream" style="width: 180px; height: 50px;"></td>
    </tr>
  </table>

  
  <label for="documents">Upload Documents:</label>
  <label>Transfer Certificate:
  <input type="file" id="documents" name="file" required><br><br>
  
  <label>10th Marksheet:
  <input type="file" id="documents" name="doc" required><br><br>
 
  <label>12th Marksheet:
  <input type="file" id="documents" name="docu" required><br><br>

             
  </div>
</div>
    <hr>
   <p> <input type="checkbox" id="checkbox" name="checkbox" required>&nbsp; &nbsp; I hereby state that facts mentioned above are true to the best of my knowledge and belief.</p>
    <button type="submit" class="registerbtn" name="addUser" onclick="openPopup()">Submit</button>
    

</div>
</form>
</div>



</body>
</html>

