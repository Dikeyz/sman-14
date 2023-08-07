<?php 
session_start();
$user=$_SESSION['user'];
?>

<?php 
    @session_start();
    // include "koneksi.php";
    include '../auth/koneksi.php'; 
    if (@$_SESSION['user']) {     
 ?>

 <!-- Membuat Session untuk login -->

<?php
include '../auth/koneksi.php';
?>
<?php
include('./pages/headeradmin.php'); #File Header Dashboard Admin
?>
<?php
include('./pages/navbaradmin.php'); #File Header Dashboard Admin
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create Akun Developer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
              <li class="breadcrumb-item active">Create Akun Developer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 <!-- Main content -->
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./auth/createdataadmin.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama">Nama Admin</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Admin" require>
                  </div>

                  <div class="form-group">
                    <label for="Nama">Username Admin</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Username Admin" require>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" require>
                  </div>

                      <div class="form-group">
                        <label>Role Admin</label>
                        <select class="custom-select" name="role">
                          <option>Developer</option>
                          <option>Super Admin</option>
                          <option>Admin</option>
                        </select>
                      </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                
              </form>
            </div>
    </div>
</section>

  <!-- Control Sidebar Config JavaScript -->
  <aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <?php
  include('./pages/footeradmin.php'); #footeradmin
  ?>
<?php 
}else{
  ?>
          <script language="JavaScript">
          alert('Login Dulu Dong');
          document.location='auth/login.php';
          </script>
  <?php    
}
?>