<?php
session_start();
include 'config/dbcon.php';
if (isset($_GET['category_id'])) {
    // Sanitize the input to prevent SQL injection
    $category_id = $_GET['category_id'];
    $category_id = mysqli_real_escape_string($conn, $category_id);

    // Prepare a SQL query to delete the category by its ID
    $sql = "DELETE FROM  categories WHERE CategoryID = '$category_id'";

    // Execute the delete query
    if ($conn->query($sql) === TRUE) {
        // Category deleted successfully, redirect to the category list page
        header("Location: Add-category.php?msg= Category deleted successfully !");
        exit(); // Terminate the script to avoid further execution
    } else {
        echo "Error deleting category: " . $conn->error;
    }
} else {
    // Handle cases where category_id is not set
    // For example, redirect to an error page
    header("Location: error.php");
    exit();
}

// Close the database connection
$conn->close();

?>
