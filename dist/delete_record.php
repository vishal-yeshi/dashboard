<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get ID from the query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Check if ID is valid
if ($id > 0) {
    // SQL to delete a record
    $sql = "DELETE FROM real_estate_leads WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        // Optionally, redirect back to a listing page or similar
        // header("Location: list_page.php"); // Replace with the name of your listing page
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}

// Close the connection
$conn->close();
?>
