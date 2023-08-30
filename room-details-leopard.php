
<?php
include_once 'config.php';


$conn = connectToDatabase();
$prices=getRoomPrices($conn);

$countryardSuitePrice=$prices['countryard_suite'];
$tigerDenPrice=$prices['tiger_den'];
$presidentialSuitePrice=$prices['presidential_suite'];

// close db connection
closeDatabaseConnection($conn)   

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Deepak Sharma">
    <title>Countryard - Leopard’s Lair</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

        <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns" src="img/rooms/1350-by-350leopard.jpg" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <small class="slide-animated one">Exquisite Roar</small>
                            <h1 class="slide-animated two">Leopard's Lair </h1>
                            <p class="slide-animated three">Enter the 'Leopard's Lair’ - Where Luxury Meets Nature.</p>
                        </div>
                    </div>
                </div>
                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_explore">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- / mouse -->
            </div>
        </div>
        <!-- /Background Img Parallax -->


        <div class="bg_white margin_120_95">
            <div class="container-fluid p-lg-0">
                <div data-cues="zoomIn">
                    <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                        <div class="item">
                            <img src="img/rooms/leopard-lair1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/rooms/leopard-lair2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/rooms/leopard-lair3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="img/rooms/leopard-lair4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" href="img/rooms/leopard-lair2.jpg">FullScreen Gallery</a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/leopard-lair4.jpg"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/leopard-lair1.jpg"></a>
                    <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/leopard-lair3.jpg"></a>
                </div>
            </div>
        </div>
        <!-- /bg_white -->

        <div class="bg_white" id="first_section">
            <div class="container add_bottom_120">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="title">
                            <small>Luxury Experience</small>
                            <h2>Leopard Lair's Retreat: Where Luxury Meets Natural Splendor</h2>
                        </div>
                        <p  style="text-align: justify;">Discover Leopard Lair's Retreat at  Countryard Resort,  a haven defined by refined wooden flooring and captivating views. Embrace panoramic vistas that seamlessly merge with the room's ambiance, offering a tranquil connection to nature. Elegance abounds as you step onto the exquisite wooden flooring, a symphony of luxury and modern finesse. Meticulously designed with meticulous attention to detail, this suite offers opulent comfort and sophisticated amenities. En-suite facilities create a private sanctuary catering to your every need</p>
                        <p  style="text-align: justify;">Immerse yourself in this refined escape, where sophistication and serene vistas unite, redefining the concept of luxury</p>
                    </div>
                    <div class="col-lg-6" style="padding-left: 80px;">
                        <div class="room_facilities_list">
                            <ul data-cues="slideInLeft">
                                <li><i class="icon-hotel-double_bed_2"></i> King Size Bed</li>
                                <li><i class="icon-hotel-tv"></i> 55 Inch TV</li>
                                <li><i class="icon-hotel-disable"></i> Disable Access</li>
                                <li><i class="icon-hotel-dog"></i> Pet Allowed</li>
                                <li><i class="icon-hotel-wifi"></i> Wifi </li>
                                <li><i class="icon-hotel-hairdryer"></i> Hair Dryer</li>
                                <li><i class="icon-hotel-condition"></i> Air Condition</li>
                            </ul>
                        </div>
                    </div>
                    <div style="justify-content: center; margin-top: 40px; text-align: center;">

                        <a href="https://hotels.eglobe-solutions.com/hotelcountryard/booking/detail"
                            class="btn_1 btn_scrollto">Book Now</a>

                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_white -->

        

        <div class="container margin_120_95" id="reviews">
            <div class="row justify-content-between">
                <div class="col-lg-4 order-lg-2 fixed_title reviews_sum_details">
                    <div class="title">
                        <small>Countryard </small>
                        <h2>Reviews</h2>
                    </div>
                    <p>Immerse your senses in the essence of Corbett National Park, where nature is at its peak. The symphony of birdsong and the soothing rustle of winds and water create a serene ambiance that envelops you in tranquility</p>
                    <h6>Comfort</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>9.0</strong></div>
                    </div>
                    <!-- /row -->
                    <h6>Facilities</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>9.5</strong></div>
                    </div>
                    <!-- /row -->
                    <h6>Location</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>6.0</strong></div>
                    </div>
                    <!-- /row -->
                    <h6>Price</h6>
                    <div class="row mb-2">
                        <div class="col-xl-10 col-lg-9 col-10">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-2"><strong>6.0</strong></div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="review_card">
                        <div class="row">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar4.jpg" alt=""></figure>
                                <h5>Lukas</h5>
                            </div>
                            <div class="col-md-10 review_content">
                                <div class="clearfix mb-3">
                                    <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                    <em>Published 54 minutes ago</em>
                                </div>
                                <h4>"Great Location!!"</h4>
                                <p> The Leopard's Lair room was a fusion of elegance and tranquility. The design transported me to a world of luxury, and the resort's dedication to service ensured a seamless and remarkable stay.</p>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /review_card -->
                    <div class="review_card">
                        <div class="row">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar6.jpg" alt=""></figure>
                                <h5>Lukas</h5>
                            </div>
                            <div class="col-md-10 review_content">
                                <div class="clearfix mb-3">
                                    <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                    <em>Published 10 Oct. 2022</em>
                                </div>
                                <h4>"Awesome Experience"</h4>
                                <p>My time in the 'Leopard's Lair' room was a luxurious escape. The room's design perfectly captured the essence of its name, and the level of comfort and service was exceptional.</p>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /review_card -->
                    <div class="review_card">
                        <div class="row">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar1.jpg" alt=""></figure>
                                <h5>Marika</h5>
                            </div>
                            <div class="col-md-10 review_content">
                                <div class="clearfix mb-3">
                                    <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
                                    <em>Published 11 Oct. 2022</em>
                                </div>
                                <h4>"Really great dinner!!"</h4>
                                <p>Staying in the 'Leopard's Lair' room was a true retreat into elegance and comfort. The attention to detail in both the room's aesthetics and the service provided was commendable.</p>
                            </div>
                        </div>
                        <!-- /row -->
                        <!-- <div class="row reply">
                            <div class="col-md-2 user_info">
                                <figure><img src="img/avatar.jpg" alt=""></figure>
                            </div>
                            <div class="col-md-10">
                                <div class="review_content">
                                    <strong>Reply from Admin</strong>
                                    <em>Published 3 minutes ago</em>
                                    <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
                                </div>
                            </div>
                        </div> -->
                        <!-- /reply -->
                    </div>
                    <!-- /review_card -->
                    <!-- <p class="text-end"><a href="#0" class="btn_1">Leave a review</a></p> -->
                </div>
            </div>
        </div>
        <!-- /reviews -->

        <div class="bg_white">
            <div class="container margin_120_95">
                <div data-cue="slideInUp">
                    <div class="title">
                        <small>Countryard </small>
                        <h2>Similar Rooms</h2>
                    </div>
                    <div class="row" data-cues="slideInUp" data-delay="800">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-countryard.php" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/Countryard-suite.jpg)"></div>
                                    <div class="info">
                                    <small><?php echo 'From &#8377 '.$countryardSuitePrice.'/night'; ?></small>
                                        <h3>Countryard Room</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-tiger.php" class="box_cat_rooms">
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
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <a href="room-details-presidential.php" class="box_cat_rooms">
                                <figure>
                                    <div class="background-image" data-background="url(img/rooms/president.jpg)"></div>
                                    <div class="info">
                                    <small><?php echo 'From &#8377 '.$presidentialSuitePrice.'/night'; ?></small>
                                        <h3>Presidential Suite</h3>
                                        <span>Read more</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- /row-->
                </div>
            </div>
        </div>
        <!-- /bg_white -->

        
        <!-- /container -->
    </main>

    <?php include_once 'footer.php'; ?>
    <!-- /footer -->
   
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- /back to top -->


<!-- COMMON SCRIPTS -->
<script src="js/common_scripts.js"></script>
<script src="js/common_functions.js"></script>
<script src="js/datepicker_inline.js"></script>
<script>
    // Progress bars animation
    $(function() {
        "use strict";
        var $section = $('#reviews');
        $(window).on('scroll', function(ev) {
            var scrollOffset = $(window).scrollTop();
            var containerOffset = $section.offset().top - window.innerHeight;
            if (scrollOffset > containerOffset) {
                $(".progress-bar").each(function() {
                    var each_bar_width = $(this).attr('aria-valuenow');
                    $(this).width(each_bar_width + '%');
                });
            }
        });
    });
</script>

</body>
</html>