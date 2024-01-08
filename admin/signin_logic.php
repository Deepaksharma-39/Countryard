<?php
session_start();
include_once "../config.php";

if (empty($_POST['username']) || empty($_POST['password'])) {
    header("location: index.php?error=Username and password are required");
    exit();
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

$conn=connectToDatabase();
$user = getUserByUsername($conn, $username);


if ($user ) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    // echo 'signin_logic.php';
    
    echo $_SESSION['id'];
    echo $_SESSION['username'];

    header("Location: home.php");
    exit();
} else {
    header("location: index.php?error=Invalid username or password");
    exit();
}

?>
