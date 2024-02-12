<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ecommerce Price Comparison Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<?php include 'styles.php';?>
 
  
</head>

<body>

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <h1>Ecommerce</h1>
            </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
          
      </nav><!-- .navbar -->
     
    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Ecommerce Price Comparison website Using Web Scrapping</h2>
                <p data-aos="fade-up" data-aos-delay="100">Price Comparison Tool : Here you can compare prices of a product on various e-commerce platforms.</p>
                <!DOCTYPE html>

                <body>
                <h1>Search in our dataset:</h1>
                <form action="search.php" method="GET" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                  <input type="text" class="form-control" placeholder="ZIP code or CitY">
                  <button type="submit" class="btn btn-primary">Search</button>
                </form>


                    


                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                        </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Stores</span>
          <h2>Stores</h2>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" >
            <div class="card">
              <div class="card-img">
                <img src="assets/img/storage-service.png" alt="" class="img-fluid">
              </div>
              <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" >
            <div class="card">
              <div class="card-img">
                <img src="assets/img/croma.png" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
              <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" >
            <div class="card">
              <div class="card-img">
                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cargo</a></h3>
              <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
            </div>
          </div><!-- End Card Item -->
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->


                        <div class="container mt-4">
                            <div class="copyright">
                                &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
                            </div>
                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">Rishab Nayak</a>
                            </div>
                        </div>

          <div class="container mt-4">
            <div class="copyright">
              &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by Namratha NR
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
<?php include 'scripts.php';?>


</body>

</html>
