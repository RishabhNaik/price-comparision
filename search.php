<?php
include 'database.php'; // Include your database connection file

// Fetch search term from GET request
$searchTerm = $_GET['query'];

// Perform database query to search for products
$stmt = $pdo->prepare("SELECT * FROM product WHERE name LIKE ?");
$stmt->execute(["%$searchTerm%"]);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($results);
?>
