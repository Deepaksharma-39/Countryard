<?php
// update_attributes.php


require "auth_check.php";
include_once '../config.php';

$conn=connectToDatabase();

    // Handle the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the attribute-value pairs from the FormData
    $updatedAttributes = $_POST;
    
    
    // Update the database with the new attribute values
    foreach ($updatedAttributes as $attribute => $value) {
        $sql = "UPDATE reservation_office SET $attribute = '$value' WHERE id = 1"; // Modify as needed
        
        if ($conn->query($sql) === TRUE) {
            echo "Updated $attribute: $value in the database\n";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    
    // Close the database connection
    closeDatabaseConnection($conn);
} else {
    echo "Invalid request.";
}



?>
