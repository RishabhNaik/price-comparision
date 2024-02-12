<?php
include 'database.php';

// Check if the query parameter is set
if(isset($_GET['query'])) {
    // Fetch search term from GET request
    $searchTerm = $_GET['query'];

    // Check if $pdo is set and not null
    if(isset($pdo)) {
        // Perform database query to search for products
        $stmt = $pdo->prepare("SELECT * FROM product WHERE name LIKE ?");
        $stmt->execute(["%$searchTerm%"]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($results);
    } else {
        // Return error response if database connection is not established
        header('HTTP/1.1 500 Internal Server Error');
        echo "Database connection failed";
    }
} else {
    // Return error response if query parameter is not set
    header('HTTP/1.1 400 Bad Request');
    echo "Search query parameter is missing";
}
?>
