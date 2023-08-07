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
              <h2>Profil Tata Usaha</h2>
            </div>
          </div>
        </div>
      </div>
</div>
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Data Tata Usaha</h2>
        </div>
        <div class="row gy-3">

        <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM staff WHERE jabatan_staff = 'kepala tata usaha'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto_staff'];?>" width="250" height="350">
              <h4><?php echo $data['nama_staff'];?></h4>
              <span><?php echo $data['jabatan_staff'];?></span>
            </div>
          </div>
          <?php
            }
          ?>
          <!-- End Team Member -->

          <?php
        include 'auth/koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM staff WHERE jabatan_staff = 'tenaga admin sekolah'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="50">
            <div class="member">
            <img src="assets/img/Guru/<?php echo $data['foto_staff'];?>" width="250" height="350">
              <h4><?php echo $data['nama_staff'];?></h4>
              <span><?php echo $data['jabatan_staff'];?></span>
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