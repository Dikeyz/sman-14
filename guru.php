<?php
include('./pages/header.php'); #File Header & Css
?>
<body>
<?php
include('./pages/navbar.php'); #File Navbar
?>
<body>
<div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Profil Guru</h2>
            </div>
          </div>
        </div>
      </div>
</div>
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data Guru</h2>
        </div>
        <div class="row gy-3">

        <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'kepala sekolah'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'wakil kepala sekolah'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
              <span><?php echo $data['keterangan'];?></span>
              <span><?php echo $data['mapel_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

        <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'kepala laboratorium'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'kepala perpustakaan'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'aset sekolah'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'bendahara komite'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="col-xl-6 " data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
              <span><?php echo $data['keterangan'];?></span>
              <span><?php echo $data['mapel_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'bendahara bos'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'kepala uks'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE jabatan_guru = 'guru'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto'];?>" width="250" height="350">
              <h4><?php echo $data['nama_guru'];?></h4>
              <span><?php echo $data['jabatan_guru'];?></span>
              <span><?php echo $data['mapel_guru'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->
<?php
include('./pages/footer.php'); #Footer File
?>
</body>
<html>