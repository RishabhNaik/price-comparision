<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS (if needed) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- AOS CSS (if needed) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    /* Your custom CSS styles can go here */
  </style>
</head>
<body>

<?php include('database.php') ?>
<?php  
$query = "SELECT * FROM `product`;"; 
  
// FETCHING DATA FROM DATABASE 
$result = $conn->query($query); 

if ($result->num_rows > 0) { 
    // OUTPUT DATA OF EACH ROW 
    while($row = $result->fetch_assoc()) { 
?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $row['img_url']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p class="card-text">Price: <?php echo $row['price']; ?></p>
            <p class="card-text">Comparison Price: <?php echo $row['comp_price']; ?></p>
            <p class="card-text">Vendor: <?php echo $row['vendor']; ?></p>
            <p class="card-text">Rating: <?php echo $row['rating']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
<?php
    } 
} else { 
    echo "0 results"; 
} 

$conn->close(); 
?>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Library (if needed) -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  // Initialize AOS Library
  AOS.init();
</script>

</body>
</html>
