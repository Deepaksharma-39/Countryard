<?php

require "auth_check.php";
include_once '../config.php';

$conn = connectToDatabase();
$reservationInfo = getPaginatedImageData($conn);
closeDatabaseConnection($conn);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Countryard - by EWD</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="style.css" rel="stylesheet">





</head>

<body class="datepicker_mobile_full">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Page Preload -->

    <div class="layer"></div>

    <?php include_once 'navbar.php' ?>


    <main>
        <div class="hero small-height  jarallax" data-jarallax data-speed="0.2" style="height: 30vh" ;>
            <img class="jarallax-img" src="../img/term-&-condition.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Countryard by EMD hotels</small>
                    <h1 class="slide-animated two">Admin Panel</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->


        <!-- /container -->

        <div class="menubar">
            <div class="menu">
                <a href="home.php" id="home">User</a>
                <a href="rooms.php" id="room">Rooms</a>
                <a href="reviews.php" id="review">Reviews</a>
                <a href="resort.php" id="resort">Messages</a>
                <a href="reservation.php" id="office">Office Details</a>
                <a href="gallery.php" id="gallery">Gallery</a>
            </div>
            <div class="content" style="padding : 20px 0px 0px 20px;">


                <form action="upload.php" method="POST" enctype="multipart/form-data" class="custom-form">
                    <h2>Upload an Image</h2>
                    <div class="form-row">
                        <label for="images">Select Images:</label>
                        <input type="file" name="images[]" id="images" accept="image/*" multiple required>

                    </div>
                    <input type="submit" name="upload" value="Upload" class='edit-button'>
                </form>

            </div>
        </div>




    </main>

    <?php include_once 'footer.php'; ?>
    <!-- /footer -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->

    <!-- COMMON SCRIPTS -->
    <script src="../js/common_scripts.js"></script>
    <script src="../js/common_functions.js"></script>







</body>

</html>