<?php

require "auth_check.php";
include_once '../config.php';

$conn = connectToDatabase();
    // Handle the POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get input values
$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];

// Validate inputs
if (empty($username) || empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
    die("Please fill in all fields."); 
}

$user = getUserByUsername($conn, $username);

if (!password_verify($oldPassword, $user['password'])) {
    die(" Old Passwords do not match");
}

changePassword($conn, $username, $newPassword);

 // Close the database connection
 closeDatabaseConnection($conn);

 $alertMessage = "Password changed successfully!";
 $redirectTo = "home.php";

 echo '<script>alert("' . $alertMessage . '");</script>';
 echo '<script>window.location.href = "' . $redirectTo . '";</script>';

} else {
    $alertMessage = "Request Failed";
    $redirectTo = "home.php";

    echo '<script>alert("' . $alertMessage . '");</script>';
 echo '<script>window.location.href = "' . $redirectTo . '";</script>';
}

?>