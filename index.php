<?php
include('./pages/header.php'); #File Header & Css
?>
<body>
<?php
include('./pages/navbar.php'); #File Navbar
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-4 order-1 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang</h2>
          <h2><span>SMA Negeri 14 Batam</span></h2>
        </div>
        <div class="col-lg-8 order-1 order-lg-3">
        <div class="icon-box">
          <img src="assets/img/sekolah2.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><value>Galery Sekolah</value></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><value>Berita Informasi</value></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><value>Perpus Online</value></h4>
            </div>
          </div>
          <!--End Icon Box -->
        </div>
      </div>
    </div>

    </div>
  </section><!-- End Hero Section -->
  
  </main><!-- End #main -->

<?php
include('./pages/footer.php'); #Footer File
?>
</body>