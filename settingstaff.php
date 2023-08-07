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
include('./pages/navbaradmin.php'); #Header Navbar Admin
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Guru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Guru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <!-- Default box -->
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit Data Guru</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!--<Form action = "readdataguru.php" method = "post">-->
        <div class="card-body">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          No.
                      </th>
                      <th>
                          Nama Tata Usaha
                      </th>
                      <th>
                          Jabatan Tata Usaha
                      </th>
                      <th>
                          Foto
                      </th>
                      <th>
                          Aksi
                      </th>
                  </tr>
              </thead>
              <?php 
              include 'auth/koneksi.php';

                $query = mysqli_query($koneksi, "SELECT * FROM staff ORDER BY id_staff ASC");
                $no = 1;  
                while ($data = mysqli_fetch_array($query)) {
                  ?>

                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data['nama_staff'];?></td>
                    <td><?php echo $data['jabatan_staff'];?></td>
                    <td><img src="assets/img/Guru/<?php echo $data['foto_staff'] ?>" width="110" height="200"></td>
                    
                  
                    <td class="project-actions text-right">
                      <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-edit<?php echo $data['id_staff']; ?>">Edit</a>
                      <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete<?php echo $data['id_staff']; ?>">Delete</a>
                    </td>
                    </td>

                <div class="modal fade" id="modal-edit<?php echo $data['id_staff']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-edit-label" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modal-edit-label">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form class="form-horizontal" action="auth/updatestaff.php" enctype="multipart/form-data" method="post">
                                      <div class="form-group row">
                                      <input type="hidden" class="form-control" id="id_staff" name="id_staff" VALUE="<?php echo $data['id_staff'];?>">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Guru</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="nama_staff" name="nama_staff" VALUE="<?php echo $data['nama_staff'];?>" required>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                      <label for="inputName" class="col-sm-2 col-form-label">Jabatan</label>
                                      <div class="col-sm-6">
                                        <select name="jabatan_staff">
                                          <option value="Kepala Tata Usaha" <?php echo $data['jabatan_staff'] == "Kepala Tata Usaha" ? "selected" : "" ?>>Kepala Tata Usaha</option>
                                          <option value="Tenaga Admin Sekolah" <?php echo $data['jabatan_staff'] == "Tenaga Admin Sekolah" ? "selected" : "" ?>>Tenaga Admin Sekolah</option>
                                        </select>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                        <img src="./assets/img/Guru/<?php echo $data['foto_staff'];?>" width="110" height="200">
                                          <input type="file" class="form-control" id="foto_staff" name="foto_staff">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                          <button type="submit" class="btn btn-danger">Simpan</button>
                                        </div>
                                      </div>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                            </div>


                <!--Modal Delete -->
                <div class="modal fade" id="modal-delete<?php echo $data['id_staff']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete-label" aria-hidden="true">
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
                        <form method="post" action="auth/deletestaff.php">
                          <input type="hidden" name="id_staff" value="<?php echo $data['id_staff']; ?>">
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
      </div>
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
