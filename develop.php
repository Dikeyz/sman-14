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
include('./pages/headeradmin.php'); #Header Dashboard Admin
?>

<?php
include('./pages/navbaradmin.php'); #Header Dashboard Admin
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Developer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
              <li class="breadcrumb-item active">Developer Only</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Data Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!--<Form action = "readdataguru.php" method = "post">-->
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 2%">
                          No.
                      </th>
                      <th style="width: 20%">
                          Username Admin
                      </th>
                      <th style="width: 20%">
                          Name Admin
                      </th>
                      <th style="width: 8%" class="text-center">
                          Role
                      </th>
                      <th style="width: 20%" class="text-center">
                          Aksi
                      </th>
                  </tr>
              </thead>
              <?php 
              include 'auth/koneksi.php';

                $query = mysqli_query($koneksi, "SELECT * FROM akses ");
                $no = 1;  
                while ($data = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['user'];?></td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['role'];?></td>
                    
                  
                    <td class="project-actions text-right">
                      <a href="#" class="btn btn-success swalDefaultSuccess" data-toggle="modal" data-target="#modal-edit<?php echo $data['id']; ?>">Edit</a>
                      <a href="#" class="btn btn-danger swalDefaultError" data-toggle="modal" data-target="#modal-delete<?php echo $data['id']; ?>">Delete</a>
                    </td>
                    </td>

<div class="modal fade" id="modal-edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-edit-label">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="auth/updateadmin.php" enctype="multipart/form-data" method="post">
                      <div class="form-group row">
                      <input type="hidden" class="form-control" id="id" name="id" VALUE="<?php echo $data['id'];?>">
                        <label for="inputName" class="col-sm-2 col-form-label">Username Admin</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="user" name="user" VALUE="<?php echo $data['user'];?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nama Admin</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" VALUE="<?php echo $data['name'];?>" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="pass" name="pass" >
                        </div>
                      </div>


                      <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Role</label>
                        <select name="role">
                          <option value="Developer" <?php echo $data['role'] == "Developer" ? "selected": "" ?>>Developer</option>
                          <option value="Super Admin" <?php echo $data['role'] == "Super Admin" ? "selected": "" ?>>Super Admin</option>
                          <option value="Admin" <?php echo $data['role'] == "Admin" ? "selected": "" ?>>Admin</option>
                        </select>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success swalDefaultSuccess">Simpan</button>
                        </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
             </div> 

<!--Modal Delete -->

<div class="modal fade" id="modal-delete<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-delete-label">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <form method="post" action="auth/deleteadmin.php">
          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" name="ya" class="btn btn-danger">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>

                  </tr>
                  <?php 
                }
                ?>
              <tbody>
                  <tr>
                  </tr>
              </tbody>
              </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
