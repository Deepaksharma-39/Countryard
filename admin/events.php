<?php

require "auth_check.php";
include_once '../config.php';

$conn = connectToDatabase();
$mediaData=getPaginatedEventData($conn);
closeDatabaseConnection($conn);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Deepak Shamra">
    <title>Countryard - by EWD</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.webp">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.webp">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="../img/apple-touch-icon-114x114-precomposed.webp">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="../img/apple-touch-icon-144x144-precomposed.webp">

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
            <img class="jarallax-img" src="../img/term-&-condition.webp" alt="">
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
                <a href="events.php" id="gallery">Events</a>

            </div>
            <div class="content" style="padding : 20px 0px 0px 20px;">


                <form action="eventUpload.php" method="POST" enctype="multipart/form-data" class="custom-form">
                    <h2>Upload an Image</h2>
                    <div class="form-row">
                        <label for="images">Select Media:</label>
                        <input type="file" name="media[]" id="images" accept="image/*,video/*" multiple required>

                    </div>
                    <input type="submit" name="eventUpload" value="Upload" class='edit-button'>
                </form>

                <div class="container margin_120_95">
                    <div class="isotope-wrapper">

                        <div class="row justify-content-center">
                            <?php
                     // Loop through the image data and generate the HTML code
                     foreach ($mediaData as $data) {
                         $mediaSrc = '../'.$data["src"];
                         $mediaLink = $data["link"];
                         $mediaid = $data["id"];
                         $isVideo = strpos($mediaSrc, 'VID') !== false; // Check if it's a video
                         echo '<div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">';
                         echo '<div class="item-img" data-cue="slideInUp">';
                        
                         if ($isVideo) {
                             echo '<div class="video-container">';
                             echo "<video controls autoplay muted loop class='landscape-video'>";
                             echo "<source src='$mediaSrc' type='video/mp4'>";
                             echo "Your browser does not support the video tag.";
                             echo "</video>";
                             echo '</div>';
                         } else {
                             echo "<img src='$mediaSrc' alt='' />";
                            
                         }
                     
                         echo '<div class="content">';
                         echo "<a data-fslightbox='gallery_1' data-type='" . ($isVideo ? 'video' : 'image') . "' href='$mediaLink'>";
                         echo "<i class='bi bi-x-circle delete-media' data-id='$mediaid'></i>";

                         echo "</a>";
                         echo '</div>';
                         echo '</div>';
                         echo '</div>';
                     
                         // Add CSS for the landscape video
                     echo '<style>
                     .video-container {
                         position: relative;
                         padding-bottom: 56.25%; /* 16:9 aspect ratio (9 / 16 * 100%) */
                         height: 0;
                         overflow: hidden;
                     }
                     
                     .landscape-video {
                         position: absolute;
                         top: 0;
                         left: 0;
                         width: 100%;
                         height: 100%;
                     }
                     </style>';
                     }
                     ?>

                        </div>
                        <!--/row -->
                    </div>


                </div>

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

    <!-- Add this JavaScript code in your HTML file -->
    <script>
    const deleteIcons = document.querySelectorAll('.delete-media');

// Attach a click event listener to each delete icon
deleteIcons.forEach(deleteIcon => {
    deleteIcon.addEventListener('click', function() {
        const mediaId = this.getAttribute('data-id');

        // Display a confirmation dialog
        const confirmed = confirm('Are you sure you want to delete this media?');

        if (confirmed) {
            // If the user confirms, send an AJAX request to delete the media
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'delete_media.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Media deleted successfully, remove the media item container
                        const mediaItem = deleteIcon.closest('.item');
                        if (mediaItem) {
                            mediaItem.remove(); // Remove the entire media item container
                        }
                        alert("media Deleted Successfully");
                    } else {
                        alert('Failed to delete media. Please try again later.');
                    }
                } else {
                    alert('Failed to delete media. Please try again later.');
                }
                
                // Redirect to the original page
                
                window.location.href = 'events.php'; // Replace with the actual page URL
            };

            xhr.send('mediaId=' + encodeURIComponent(mediaId));
        }
    });
});

    </script>






</body>

</html>