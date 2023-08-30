<?php
// Assuming db_conn.php is included or required
include '../config.php';
require "auth_check.php";

$conn = connectToDatabase();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $suiteType = $_POST['suiteType'];
        $updatedRooms = intval($_POST['updatedRooms']);
        $updatedPrice = floatval($_POST['updatedPrice']);
    
        updateRoomDetails($conn, $suiteType, $updatedRooms, $updatedPrice);
        
       
    }
    



?>
