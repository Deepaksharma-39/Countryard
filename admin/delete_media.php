<?php
// Include your database connection file here (e.g., db_connection.php)
require "auth_check.php";
include '../config.php';

$conn = connectToDatabase();
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure the 'mediaId' parameter is set and is a valid integer
    if (isset($_POST['mediaId'])) {
        // Sanitize and validate the input
        $mediaId = intval($_POST['mediaId']); // Retrieve and sanitize 'mediaId'

        // Perform the media deletion
        $sql = "DELETE FROM images WHERE id = ?";
        
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('i', $mediaId);
            if ($stmt->execute()) {
                // Deletion was successful
                $response = array('success' => true);
                
                // Delete the corresponding file from the server
                $filename = ""; // Specify the filename to delete
                $file_path = "../path_to_your_files_directory/" . $filename;
                
                if (file_exists($file_path)) {
                    if (unlink($file_path)) {
                        // File deletion was successful
                    } else {
                        // Error occurred while deleting the file
                        $response['file_error'] = 'Error deleting the file';
                    }
                } else {
                    // File does not exist
                    $response['file_error'] = 'File not found';
                }
            } else {
                // Error occurred while executing the query
                $response = array('success' => false, 'error' => 'Database error');
            }
            $stmt->close();
        } else {
            // Error occurred while preparing the statement
            $response = array('success' => false, 'error' => 'Statement error');
        }
    } else {
        // Invalid 'mediaId' parameter
        $response = array('success' => false, 'error' => 'Invalid mediaId');
    }
} else {
    // Invalid request method
    $response = array('success' => false, 'error' => 'Invalid request method');
}

closeDatabaseConnection($conn);

// Output the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
