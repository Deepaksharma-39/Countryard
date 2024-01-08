<?php
include_once 'config.php';

$presidentialSuitePrice=$countryardSuitePrice=$tigerDenPrice=$leopardsLairPrice=$deerParkPrice='';

$conn = connectToDatabase();
$mediaData=getPaginatedEventData($conn);
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
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.webp" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.webp" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.webp" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.webp" />

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
        <div class="hero full-height jarallax" data-jarallax-video="mp4:./video/homepage.mp4" data-speed="0.2" id="queryForm">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <!-- first page -->

            <div class="pos">
                <div class="container">
                    <small class="slide-animated one">A World of Luxury Awaits</small>
                    <h3 class="slide-animated two">
                        Your Exquisite Resort Getaway
                    </h3>
                    <a href="https://hotels.eglobe-solutions.com/hotelcountryard/booking/detail"
                        class="btn_1 btn_scrollto">Book Now</a>
                </div>


                <div class="col-xl-7 col-lg-7 order-lg-1" >
                    <h3 class="mb-3" >Get in Touch</h3>
                    <form method="post" action="phpmailer/contact_template_email.php" id="contactform"
                        autocomplete="off" class="pos1">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact"
                                        placeholder="Name">
                                    <label for="name_contact">First Name</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="lastname_contact"
                                        name="lastname_contact" placeholder="Last Name">
                                    <label for="lastname_contact">Last name</label>
                                </div>
                            </div>

                        </div>
                        <!-- /row -->
                        <div class="row">
                               <div class="col-sm-6">
                                    <div class="form-floating mb-4">
                                        <input class="form-control" type="email" id="email_contact" name="email_contact"
                                            placeholder="Email">
                                        <label for="email_contact">Email</label>
                                    </div>
                                </div>

                                  <div class="col-sm-6">
                                        <div class="form-floating mb-4">
                                            <input class="form-control" type="text" id="phone_contact" name="phone_contact"
                                                placeholder="Telephone" maxlength="10" pattern="[0-9]{1,10}"
                                                title="Please enter a valid phone number">
                                            <label for="phone_contact">Telephone</label>
                                        </div>
                                    </div>
                                
                        </div>
                        <!-- /row -->

                        <div class="row">
                                 <div class="col-sm-6">
                                        <div class="form-floating mb-4">
                                            <input class="form-control" type="number" id="guest"
                                                name="guest" placeholder="No. of Guest">
                                            <label for="guest">No. of Guest</label>
                                        </div>
                                 </div>

                                 <div class="col-sm-6">
                                        <div class="form-floating mb-4">
                                                <input class="form-control" type="text" name="dates" placeholder="Wedding Day" readonly="readonly">
                                                <label for="dates">Wedding Day</label>
                                        </div>
                                 </div>            
                        </div>

                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact"
                                name="message_contact"></textarea>
                            <label for="message_contact">Other Details</label>
                        </div>

                            <input type="submit" value="Submit"  class="btn_1 btn_scrollto" id="submit-contact">

                    </form>
                    
                </div>

                </div>

                <!-- <div class="container">
                    <small class="slide-animated one">A World of Luxury Awaits</small>
                    <h3 class="slide-animated two">
                        Your Exquisite Resort<br />Getaway
                    </h3>
                    <a href="https://hotels.eglobe-solutions.com/hotelcountryard/booking/detail"
                        class="btn_1 btn_scrollto">Book Now</a>
                </div> -->

                <div class="mouse_wp slide-animated four">
                    <a href="#first_section" class="btn_scrollto">
                        <div class="mouse"></div>
                    </a>
                </div>
                <!-- /mouse_wp -->
            </div>

        </div>
        <!-- First Page with Form --> 
       
            <div class="container margin_120_95" style="padding-top :30px; padding-bottom :30px;">
                <div class="title mb-2">
                    <small data-cue="slideInUp">Luxury experience</small>
                    <h2 data-cue="slideInUp" data-delay="200">Wedding & Events</h2>
                </div>
                <div class="owl-carousel owl-theme carousel_item_3 rounded-img">
                    <div class="item" data-cues="slideInUp" data-delay="300">
                        <a href="#queryForm" class="box_cat_rooms">
                            <figure>
                                <div class="background-image" style="background-image: url(image/img1.jpg)"></div>
                                <div class="info">
                                    
                                    <h3>Events</h3>
                                    <span>Book Now</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /item-->
                    <div class="item" data-cues="slideInUp" data-delay="400">
                        <a href="#queryForm" class="box_cat_rooms">
                            <figure>
                                <div class="background-image" style="background-image: url(image/img2.jpg)"></div>
                                <div class="info">
                                    <h3>Weddings</h3>
                                    <span>Book Now</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /item-->
                    <div class="item" data-cues="slideInUp" data-delay="500">
                        <a href="#queryForm" class="box_cat_rooms">
                            <figure>
                                <div class="background-image" style="background-image: url(image/img3.jpg)"></div>
                                <div class="info">
                                    <h3>Birthdays</h3>
                                    <span>Book Now</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /item-->
                  
                </div>
                <!-- /carousel-->
                <p class="text-end"><a href="room-list-1.html" class="btn_1 outline mt-2" data-cue="slideInUp" data-delay="750">View all Rooms</a></p>
            </div>
      
        <!-- Videos -->
       
          <div class="container margin_90_95">
            <div class="isotope-wrapper">

                <div class="row justify-content-center">
                    <?php
                                    // Loop through the image data and generate the HTML code
                            foreach ($mediaData as $data) {
                            $mediaSrc = $data["src"];
                                $mediaLink = $data["link"];
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
                                echo "<i class='bi " . ($isVideo ? 'bi-play-circle' : 'bi-arrows-angle-expand') . "'></i>";
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


        <!-- Gallery -->

        <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
            <img class="jarallax-img kenburns-2" src="img/client-testimonial.webp" loading="lazy" alt="…" />
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
                                                <img src="img/client2.webp" loading="lazy" alt="…" class="img-circle" />
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
                                                <img src="img/client1.webp" loading="lazy" alt="…" class="img-circle" />
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
                                                <img src="img/client3.webp" loading="lazy" alt="…" class="img-circle" />
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