<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/cbcon.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <div class="container">
    <div class="row">
        <div class="col md 12">
          <?php
          if(isset($_SESSION['status'])){
            echo "<h4> ".$_SESSION['status']."<h4>";
            unset($_SESSION['status']);
          }
          ?>
    <div class="card">
              <div class="card-body">
                <table id="" class="table table-bordered table-hover">
                  <thead>
                  <tr><th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Course Applied</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $query= "SELECT * FROM register";
                    $query_run = mysqli_query($con, $query);
                    if(mysqli_num_rows($query_run)> 0){
                     foreach($query_run as $row){
                     
                      ?>
                      <tr>
                  <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['program']; ?></td>
                   <td>
                    <a href="" class="btn btn-info btn-sm">Edit</a>
                    <a href="" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                      
                      <?php
                     }
                    }
                    else{
                     ?>
                     <tr>
                      <td>No record Found</td>
                    </tr>
                    <?php
                    }
                    ?>
                 
                </tbody>
                </table>
                </div>                 
        </div>
    </div>
    </div>
    </div>
        </section>
</div>
    <?php
include('includes/footer.php');
?>