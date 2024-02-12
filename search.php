<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$database = "price-comp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch search term from GET request
$searchTerm = $_GET['query'];

// Prepare SQL statement to search for products
$sql = "SELECT * FROM product WHERE name LIKE '%$searchTerm%'";
$result = $conn->query($sql);

// Store results in an array
$products = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Close database connection
$conn->close();

// Return JSON response
header('Content-Type: application/json');
echo json_encode($products);
?>
