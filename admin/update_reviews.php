<?php
include_once '../config.php';
require "auth_check.php";

$conn = connectToDatabase();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idToDelete = $_POST['id'];
    
   
    
        // Perform SQL DELETE query to delete the message from the database
        $query = "DELETE FROM contact_form WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $idToDelete);
        $stmt->execute();
        $stmt->close();
        closeDBConnection($conn);
    
    
    // Send a response back to the client
    http_response_code(200);
    echo "Message deleted successfully.";
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>