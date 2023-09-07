<?php
// Assuming db_conn.php is included or required

require "auth_check.php";
include_once '../config.php';

$conn = connectToDatabase();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $updatedEmail = $_POST['updatedEmail'];
        $updatedPhone1 = $_POST['updatedPhone1'];
        $updatedPhone2 = $_POST['updatedPhone2'];

        // echo $updatedPhone2;
    
        // Update the data in the database
        $updateQuery = "UPDATE resort_details SET email = '$updatedEmail', phone1 = '$updatedPhone1', phone2 = '$updatedPhone2' WHERE id = 1";

        $result = mysqli_query($conn, $updateQuery);
    
        if ($result) {
            echo 'Data updated successfully';
        } else {
            echo 'Failed to update data';
        }
    }
    



?>
