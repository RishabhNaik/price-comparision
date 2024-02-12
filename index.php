<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ecommerce Price Comparison Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">


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

            </nav>

        </div>
    </header>

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

                            <section id="results">
                                <div id="results" style="background-color: #f2f2f2; padding: 10px;"></div>
                                <div id="results"></div>
                                <div id="resultDetails" class="mt-3"></div>

                            </section>

                            <script>
                                function searchData(event) {
                                    event.preventDefault(); // Prevent the form from submitting
                                    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
                                    const results = document.getElementById('results');
                                    const resultDetails = document.getElementById('resultDetails');

                                    results.innerHTML = '';
                                    resultDetails.innerHTML = '';

                                    if (searchTerm === '') {
                                        results.innerHTML = 'Please enter a search term.';
                                        return;
                                    }

                                    // Make AJAX request to fetch search results
                                    fetch(`search.php?query=${searchTerm}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.length === 0) {
                                                results.innerHTML = `No results found for '${searchTerm}'.`;
                                                return;
                                            }

                                            let output = '<ul>';

                                            data.forEach(item => {
                                                output += `<li onclick="showDescription('${item.description}')">${item.name}</li>`;
                                            });

                                            output += '</ul>';

                                            results.innerHTML = output;
                                        })
                                        .catch(error => {
                                            console.error('Error fetching search results:', error);
                                            results.innerHTML = 'An error occurred while fetching search results.';
                                        });
                                }

                                function showDescription(description) {
                                    const resultDetails = document.getElementById('resultDetails');
                                    resultDetails.innerHTML = `<p>${description}</p>`;
                                }

                                // Add an event listener to the form to handle the search submission
                                document.querySelector('.form-search').addEventListener('submit', searchData);
                            </script>


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


        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <span>Our Services</span>
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/storage-service.jpg" alt="" class="img-fluid">
                            </div>
                            <p>Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam repellendus temporibus itaqueofficiis odit</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
                            <p>Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
                            </div>
                            <h3><a href="service-details.html" class="stretched-link">Cargo</a></h3>
                            <p>Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit doloremque oluptatem aut et molestiae ut et nihil</p>
                        </div>
                    </div>



                </div>

            </div>
        </section>



        </div>
        <div class="swiper-pagination"></div>
        </div>

        </div>
        </section>
        <footer id="footer" class="footer">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">


                        <div class="container mt-4">
                            <div class="copyright">
                                &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
                            </div>
                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">Rishab Nayak</a>
                            </div>
                        </div>

        </footer>


        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <script src="assets/js/main.js"></script>

</body>

</html>