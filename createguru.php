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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1>Create Data Guru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
              <li class="breadcrumb-item active">Create Data Guru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="./auth/buatdataguru.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Lengkap">
                  </div>

                  <div class="form-group">
                        <label>Jabatan</label>
                        <select class="custom-select" name="jabatan_guru">
                          <option>Kepala Sekolah</option>
                          <option>Wakil Kepala Sekolah</option>
                          <option>Kepala Laboratorium</option>
                          <option>Kepala Perpustakaan</option>
                          <option>Aset Sekolah</option>
                          <option>Bendahara Komite</option>
                          <option>Bendahara BOS</option>
                          <option>Kepala UKS</option>
                          <option>Guru</option>
                        </select>
                      </div>

                      <!-- <div class="form-group">
                        <label>keterangan</label>
                        <select class="custom-select" name="keterangan">
                          <option>Kerikulum</option>
                          <option>Kesiswaan</option>
                          <option>Sarana Dan Prasarana</option>
                        </select>
                      </div> -->

                  <div class="form-group">
                    <label for="Mapel">Mapel</label>
                    <input type="text" class="form-control" id="mapel_guru" name="mapel_guru" placeholder="Mata Pelajaran">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- /.card-body -->



                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
  ?>>
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