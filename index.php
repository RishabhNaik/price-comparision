<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ecommerce Price Comparison Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'styles.php'; ?>


</head>

<body>

    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Ecommerce Price Comparison website Using Web Scrapping</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Price Comparison Tool : Here you can compare prices of a product on various e-commerce platforms.</p>
                    <h1>Search in our dataset:</h1>
                    <form id="searchForm" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" id="searchInput" class="form-control" placeholder="enter product name">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
                </div>

            </div>
            <p>Find the lowest price among the search results:</p>
            <div id="minPriceResult"></div>
        </div>
    </section>

    <main id="main">
        <section id="service" class="services pt-0">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <span>Stores</span>
                    <h2>Stores</h2>
                </div>
                <div class="row gy-4" id="vendorCards">
                    <div id="searchResults" class="row gy-4" data-aos="fade-up" data-aos-delay="400">
                        <!-- Search results will be dynamically populated here -->
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Rishab Nayak</a>
        </div>
    </div>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <?php include 'scripts.php'; ?>

    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let searchTerm = document.getElementById('searchInput').value;
            fetch(`search.php?query=${encodeURIComponent(searchTerm)}`)
                .then(response => {
                    if (!response.ok) {
                        console.log(response);
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data); // Log the data to see its structure
                    if (Array.isArray(data)) {
                        let searchResultsHtml = '';
                        let minPrice = Number.MAX_VALUE;
                        let minPriceVendor = '';
                        data.forEach(product => {
                            // Calculate the discount percentage
                            let originalPrice = parseFloat(product.price);
                            let discountedPrice = parseFloat(product.comp_price);
                            let discountPercentage = ((originalPrice - discountedPrice) / originalPrice) * 100;
                            discountPercentage = discountPercentage.toFixed(2); // Round to 2 decimal places

                            searchResultsHtml += `
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="${product.img_url}" alt="" class="img-fluid">
                            </div>
                            <h3>${product.name}</h3>
                            <p>Original Price: <del>${product.price}</del></p>
                            <p>Discount: ${discountPercentage}%</p>
                            <p>Vendor: ${product.vendor}</p>
                            <p>Rating: ${product.rating}</p>
                        </div>
                    </div>`;

                            // Update minimum price and corresponding vendor if applicable
                            if (discountedPrice < minPrice) {
                                minPrice = discountedPrice;
                                minPriceVendor = product.vendor;
                            }
                        });
                        document.getElementById('searchResults').innerHTML = searchResultsHtml;

                        // Display minimum price and vendor
                        document.getElementById('minPriceResult').innerHTML = `
                        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Lowest Price: ${minPrice}</h4>
        <p>Vendor: ${minPriceVendor}</p>
    </div>`;
                    } else {
                        console.error('Data received from server is not an array:', data);
                    }
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        });
    </script>

</body>

</html>