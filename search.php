<?php
include 'database.php';

// Check if the query parameter is set
if (isset($_GET['query'])) {
    // Fetch search term from GET request
    $searchTerm = $_GET['query'];
    
    // Connect to the database

    // Prepare the SQL query to fetch data based on column names
    $sql = "SELECT * FROM product WHERE ";
    $columns = array('name'); // Adjust column names as per your table structure
    $conditions = array();
    foreach ($columns as $column) {
        $conditions[] = "$column LIKE '%$searchTerm%'";
    }
    $sql .= implode(" OR ", $conditions);

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch and encode the data as JSON
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($rows);
    } else {
        // Return message if no matching rows are found
        echo json_encode(array('message' => 'No matching records found.'));
    }

    // Close the database connection
    mysqli_close($conn);

} else {
    // Return error response if query parameter is not set
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('message' => 'Search query parameter is missing.'));
}
?>
