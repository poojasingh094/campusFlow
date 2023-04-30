<?php
session_start();

include('config/dbcon.php');
// include('includes/sidebar.php');
error_reporting(0);

$query ="SELECT * FROM apply_form";
$data= mysqli_query($con, $query);

 $total = mysqli_num_rows($data);
 
//  echo $total;

 if($total != 0)
 {
    ?>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
         padding:5px;      
            }
   .small {
  zoom: 75%;
}

tr {
  border-bottom: 10px ;
}
tr:hover {background-color: #D6EEEE;}
button {
  background-color: #7F96FF;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
}
button:hover {
  background-color: red;
}
a {
  color: #fff;
}
input #cat {
  background-color: #fff;
}
input #cat.selected {
  background-color: red;
}

input #cat.rejected {
  background-color: #fdd;
}
</style>

    <h2 align= "center">Displaying All Records</h2>
<table class="small" border="1" align= "center" cellspacing="7">
    <tr style="background-color:#7F96FF;color:#ffffff;">
    <th style="height:65px">Name</th>
    <th >Category</th>
    <th>Father's Name</th>
    <th>Mother's Name</th>
    <th>Nation</th>
    <th>Email</th>
    <th>Phone </th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Address</th>
    <th>10th Marks</th>
    <th>12th Marks</th>
    <th>Transfer Certificate</th>
    <th >Application Status </th><tr>
    <tr>
</tr>
  
<?php

    while($result= mysqli_fetch_assoc($data)){
    echo "<tr>
    
            <td >".$result['name']."</td>
            <td>".$result['category']."</td>
            <td>".$result['fname']."</td>
            <td>".$result['mname']."</td>
            <td>".$result['nation']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['dob']."</td>
            <td>".$result['addres']."</td>
            <td>".$result['percent']."</td>
            <td>".$result['perc']."</td>
        
            <td><button><a href='" .$result['pdf_url']." 'download='".$pdf_name."'  >".$result['']."Download PDF</a></button></td>
            <form action='icode.php' method='POST' >
            <td>
            <input list='cat' name='choose' placeholder='Pending' style='width: 110px; margin-left: 18px; height: 35px; color: white;' onchange='changeColor(this);'/>
            <input type='hidden' name='ids[]' value='".$result['id']."'>
            <button type='submit' name='user'>Submit</button>
            <datalist id='cat'>
                <option value='Selected'>
                <option value='Rejected'>
                </datalist>
            </datalist>
        </td>                                                                                                         
            </form>     
            </tr>" ;         
}
}
 else{
    echo "No records found";
 }
?>
<script>
function changeColor(element) {
  if (element.value === 'Selected') {
    element.style.backgroundColor = 'green'; // set the background color to green
  } else if (element.value === 'Rejected') {
    element.style.backgroundColor = 'red'; // set the background color to red
  } else {
    element.style.backgroundColor = 'white'; // reset the background color
  }
}
</script>

</table>

