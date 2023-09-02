<?php
include_once 'config.php';

$presidentialSuitePrice=$countryardSuitePrice=$tigerDenPrice=$leopardsLairPrice=$deerParkPrice='';

$conn = connectToDatabase();

$roomPrices = getRoomPrices($conn);

$countryardSuitePrice = $roomPrices["countryard_suite"];
$presidentialSuitePrice = $roomPrices["presidential_suite"];
$leopardsLairPrice = $roomPrices["leopards_lair"];
$deerParkPrice = $roomPrices["deer_park"];
$tigerDenPrice = $roomPrices["tiger_den"];
closeDatabaseConnection($conn)   

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Deepak Sharma" />
    <title>Countryard - by EWD</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png" />

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/vendors.min.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet" />
</head>

<body class="datepicker_mobile_full">
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Page Preload -->

    <div class="layer"></div>
    <!-- Opacity Mask -->



    <!-- /Header -->

    <?php include_once 'navbar.php'; ?>
    <!-- /nav_panel -->

    <main>
        <div class="hero full-height jarallax"
            data-jarallax-video="mp4:./video/homepage.mp4,webm:./video/sunset.webm,ogv:./video/sunset.ogv"
            data-speed="0.2">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <!-- first page -->
                <div class="container">
                    <small class="slide-animated one">A World of Luxury Awaits</small>
                    <h3 class="slide-animated two">
                        Your Exquisite Resort<br />Getaway
                    </h3>
                    <a href="https://hotels.eglobe-solutions.com/hotelcountryard/booking/detail"
                        class="btn_1 btn_scrollto">Book Now</a>
                </div>

                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_scrollto">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- /mouse_wp -->
            </div>
        </div>
        <!-- /jarallax video background -->

        <div class="pattern_2">
            <div class="container margin_120_95" id="first_section">
                <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                    <div class="col-lg-5">
                        <div class="parallax_wrapper">
                            <img src="img/home_1.jpg" alt="" class="img-fluid rounded-img" />
                            <div data-cue="slideInUp" class="img_over">
                                <span data-jarallax-element="-30"><img src="img/home_2.jpg" alt=""
                                        class="rounded-img" /></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="intro">
                            <div class="title">
                                <small>About us</small>
                                <h2>
                                    Discover Serene Grandeur: Every Detail Elevates Your Stay
                                </h2>
                            </div>
                            <p class="lead">
                                Enveloped in Tranquil Luxury, Your Haven of Respite Awaits
                            </p>
                            <p>
                                Adjacent to the renowned Jim Corbett National Park, Our
                                expedition embarked with a dedicated purpose – to provide a
                                haven of respite, elegantly intertwined with meticulous
                                luxury. The moment you set foot within our premises, a gentle
                                embrace of nature's serenity enfolds you, forging an
                                atmosphere that harmoniously reverberates throughout your
                                entire stay.
                            </p>
                            <p><em>Countryard...by EWD HOTELS</em></p>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <div class="pinned-image pinned-image--medium">
                <div class="pinned-image__container" id="section_video">
                    <video loop="loop" muted="muted" id="video_home">
                        <source src="video/swimming_pool.mp4" type="video/mp4" />
                        <!-- <source src="video/swimming_pool_2.webm" type="video/webm" />
                        <source src="video/swimming_pool_2.ogv" type="video/ogg" /> -->
                    </video>
                    <div class="pinned-image__container-overlay"></div>
                </div>
                <div class="pinned_over_content">
                    <div class="title white">
                        <small data-cue="slideInUp" data-delay="200">Glide into Bliss</small>
                        <h2 data-cue="slideInUp" data-delay="300">
                            Dive In and Discover<br />
                            Your Haven of Refreshment
                        </h2>
                    </div>
                </div>
            </div>
            <!-- /pinned content -->
        </div>
        <!-- /Pattern  -->

        <div class="container margin_120_95">
            <div class="title mb-3">
                <small data-cue="slideInUp">Luxury experience</small>
                <h2 data-cue="slideInUp" data-delay="200">Rooms & Suites</h2>
            </div>

            <div class="row justify-content-center add_bottom_90" data-cues="slideInUp" data-delay="300">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <a href="room-details-presidential.php" class="box_cat_rooms">
                        <figure>
                            <div class="background-image" data-background="url(img/rooms/Levish-presidental-suite.jpg)">
                            </div>
                            <div class="info">
                                <small><?php echo 'From &#8377 '.$presidentialSuitePrice.'/night'; ?></small>
                                <h3>Presidential Suite</h3>
                                <span>Read more</span>
                            </div>
                        </figure>
                    </a>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-countryard.php" class="box_cat_rooms">
                                <!-- ... (box 2 content) ... -->
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/president.jpg)"></div>
                                    <div class="info">
                                        <small><?php echo 'From &#8377 '.$countryardSuitePrice.'/night'; ?></small>
                                        <h3>Countryard Suites</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-tiger.php" class="box_cat_rooms">
                                <!-- ... (box 3 content) ... -->
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/Tiger-den.jpg)"></div>
                                    <div class="info">
                                        <small><?php echo 'From &#8377 '.$tigerDenPrice.'/night'; ?></small>
                                        <h3>Tiger Den</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-leopard.php" class="box_cat_rooms">
                                <!-- ... (box 4 content) ... -->
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/leopard-lair1.jpg)">
                                    </div>
                                    <div class="info">
                                        <small><?php echo 'From &#8377 '.$leopardsLairPrice.'/night'; ?></small>
                                        <h3>Leopard’s Lair</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-deer.php" class="box_cat_rooms">
                                <!-- ... (box 5 content) ... -->
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/Deer-park.jpg)"></div>
                                    <div class="info">
                                        <small><?php echo 'From &#8377 '.$deerParkPrice.'/night'; ?></small>
                                        <h3>Deer Park</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /row-->

            <div class="title text-center mb-5">
                <small data-cue="slideInUp">Countryard</small>
                <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
            </div>

            <div class="container1">
                <div class="row mt-4">
                    <div class="col-xl-4 col-md-6">
                        <div class="box_facilities no-border" data-cue="slideInUp">
                            <!-- Box content for Private Parking -->
                            <img src="img/icons/conference-hall.png" height="62" width="61" />
                            <h3>Conference Hall</h3>
                            <p>
                                Cutting-edge technology, and seamless amenities for impactful
                                gatherings. Elevate your events with us
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <!-- Box content for High Speed Wifi -->
                            <img src="img/icons/Swimming-pool.png" height="62" width="61" />
                            <h3>Swimming Pool</h3>
                            <p>
                                Sparkling swimming pool nestled in scenic surroundings.
                                Refresh, relax, and rejuvenate in our serene aquatic retreat
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <!-- Box content for Bar & Restaurant -->
                            <img src="img/icons/wifi.png" height="62" width="61" />
                            <h3>Complimentary Wi-Fi</h3>
                            <p>
                                Enjoy complimentary Wi-Fi throughout our premises. Stay
                                connected effortlessly while relishing the comforts of your
                                stay
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <!-- Box content for Swimming Pool -->
                            <img src="img/icons/balcony-room.png" height="62" width="61" />
                            <h3>Balcony Rooms</h3>
                            <p>
                                Unwind amidst panoramic vistas, embracing nature's beauty
                                while indulging in supreme comfort
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <!-- Box content for Swimming Pool -->
                            <img src="img/icons/Kids-play-area.png" height="62" width="61" />
                            <h3>Kids Play Area</h3>
                            <p>
                                Our kids' area offers joy-filled adventures. Safe,
                                interactive, and delightful space for your little ones to
                                explore and thrive
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="box_facilities" data-cue="slideInUp">
                            <!-- Box content for Swimming Pool -->
                            <img src="img/icons/gym.png" height="62" width="61" />
                            <h3>Gym & Spa</h3>
                            <p>
                                Achieve fitness goals and indulge in revitalizing treatments
                                for a complete mind-body experience
                            </p>
                        </div>
                    </div>
                    <!-- Add three more similar div elements for the remaining facilities -->
                </div>
            </div>
        </div>
        <!-- /container-->




        <div class="bg_white">
            <div class="container margin_120_95">
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="img//ameneties/Levish-presidental-suite.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <h3>Lavish Presidential Suite</h3>
                            <p>
                                Indulge in the pinnacle of opulence with our Presidential
                                Suite. Impeccable design, lavish amenities, and personalized
                                service converge in this haven of refined luxury. Experience
                                unrivaled comfort and sophistication.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row justify-content-between d-flex align-items-center add_bottom_90">
                    <div class="col-lg-6 order-lg-2">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="img/ameneties/high-tech-confrecehall.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">
                        <div class="title">
                            <h3>High-tech Conference Hall</h3>

                            <p>
                                Discover the epitome of sophisticated gatherings in our
                                state-of-the-art Conference Hall. A distinguished space where
                                innovation and elegance unite for seamless corporate events
                                and impactful meetings.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row justify-content-between d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="pinned-image rounded_container pinned-image--small mb-4">
                            <div class="pinned-image__container">
                                <img src="img/ameneties/Rejuvenating-gym-&-spa.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="title">
                            <h3>Rejuvenating Gym & Spa</h3>
                            <p>
                                Embark on a journey of holistic wellness at our Gym & Spa
                                facility. Immerse yourself in state-of-the-art fitness
                                facilities and rejuvenating spa treatments, designed to
                                nurture your body and soul.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- /row -->
            </div>
            <!-- /container-->
        </div>
        <!-- /bg_white -->

        <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns-2" src="img/client-testimonial.jpg" alt="" />
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="title white">
                                <small class="mb-1">Testimonials</small>
                                <h2>What Clients Says</h2>
                            </div>
                            <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure>
                                                <img src="img/client2.jpg" alt="" class="img-circle" />
                                            </figure>
                                            <h4>Parth<small>24 Jul</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Exquisite stay filled with elegance and comfort. The
                                            fine details, from the balcony view to the sumptuous
                                            cuisine, were a delight."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure>
                                                <img src="img/client1.jpg" alt="" class="img-circle" />
                                            </figure>
                                            <h4>Shivani<small>2 Aug</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Our family retreat at Countryard Resort was a dream.
                                            The kids' activities, poolside fun, and attentive staff
                                            made it a perfect getaway."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure>
                                                <img src="img/client3.jpg" alt="" class="img-circle" />
                                            </figure>
                                            <h4>Shekhar<small>31 Aug</small></h4>
                                        </div>
                                        <div class="comment">
                                            "enchanting escape that exceeded our expectations. The
                                            impeccable service and lush surroundings made our stay
                                            truly unforgettable."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>
                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /parallax_section_1-->

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
    <script src="js/common_scripts.js"></script>
    <script src="js/common_functions.js"></script>
    <script src="js/datepicker_inline.js"></script>
</body>

</html>