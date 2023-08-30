<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {

    echo $_SESSION['id'];
    echo $_SESSION['username'];

    header("Location: index.php");
    exit();
}
?>