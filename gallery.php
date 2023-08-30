<?php
include_once 'config.php';

// $presidentialSuitePrice=$countryardSuitePrice=$tigerDenPrice=$leopardsLairPrice=$deerParkPrice='';

$conn = connectToDatabase();
$imageData=getPaginatedImageData($conn);
closeDatabaseConnection($conn)   
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>PARADISE - Hotel and Bed&Breakfast Site Template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>


    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <?php include_once 'navbar.php'; ?>
    <!-- /nav_panel -->


    <main>

        <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img" src="img/rooms/Untitled-2.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">Gallery</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="isotope-wrapper">

                <div class="row justify-content-center">
                    <?php
// Loop through the image data and generate the HTML code
foreach ($imageData as $data) {
    $imgSrc = $data["src"];
    $imgLink = $data["link"];
    echo <<<HTML
    <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4">
        <div class="item-img" data-cue="slideInUp">
            <img src="$imgSrc" alt="" />
            <div class="content">
                <a data-fslightbox="gallery_1" data-type="image" href="$imgLink"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
        </div>
    </div>
HTML;
}

?>

                </div>
                <!--/row -->
            </div>
            <!--/isotope-wrapper -->

            <!-- <div class="pagination__wrapper">
                <ul class="pagination">
                    <li><a href="#0" class="prev"><i class="bi bi-arrow-left-short"></i></a></li>
                    <li>
                        <a href="#0" class="active">1</a>
                    </li>
                    <li>
                        <a href="#0">2</a>
                    </li>
                    <li>
                        <a href="#0">3</a>
                    </li>
                    <li>
                        <a href="#0">4</a>
                    </li>
                    <li><a href="#0" class="next"><i class="bi bi-arrow-right-short"></i></a></li>
                </ul>
            </div> -->
            <!-- /pagination -->

        </div>
        <!--/container -->
    </main>


    <?php require 'footer.php'; ?>
    <!-- /footer -->


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- /back to top -->


    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
    <script src="js/common_functions.js"></script>
    <script src="phpmailer/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/isotope.min.js"></script>
    <script>
    $(function() {
        "use strict";
        $(window).on('load', function() {
            var $container = $('.isotope-wrapper');
            $container.isotope({
                itemSelector: '.item',
                layoutMode: 'masonry',
            });
        });
    });
    </script>

</body>

</html>