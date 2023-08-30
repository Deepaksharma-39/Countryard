<?php
include_once 'config.php';


$conn = connectToDatabase();
$prices=getRoomPrices($conn);


$leopardsLairPrice=$prices['leopards_lair'];
$tigerDenPrice=$prices['tiger_den'];
$presidentialSuitePrice=$prices['presidential_suite'];
$countryardSuitePrice=$prices['countryard_suite'];
$deerParkPrice=$prices['deer_park'];

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
  <title>Countryard - Rooms</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

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
      <img class="jarallax-img" src="img/rooms/one-room-and-suite.jpg" alt="">
      <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
        data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
          <small class="slide-animated one">Luxury Hotel Experience</small>
          <h1 class="slide-animated two">Our Rooms & Suites</h1>
        </div>
      </div>
    </div>
    <!-- /Background Img Parallax -->

    <div class="container margin_120_95 pb-0" id="first_section">
      <div id="presedentialsuit" class="row_list_version_1">
        <div class="pinned-image rounded_container pinned-image--medium">
          <div class="pinned-image__container">
            <img src="img/rooms/1350-by-350presidential.jpg" alt="">
          </div>
        </div>
        <!-- /pinned-image -->
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <div class="box_item_info" data-jarallax-element="-30">
              <small>The Epitome of Luxury and Sophistication</small>
              <h2>Presidential Suite</h2>
              <p>Meticulously curated with exquisite attention to detail, this suite offers an unparalleled level of
                opulence. With expansive spaces adorned with refined furnishings and upscale amenities, it provides an
                exclusive oasis of comfort.</p>
              <div class="facilities clearfix">
                <ul>
                  <li>
                    <i class="customicon-double-bed"></i> King Size Bed
                  </li>
                  <li>
                    <i class="customicon-wifi"></i> Free Wifi
                  </li>
                  <li>
                    <i class="customicon-television"></i> 32 Inc TV
                  </li>
                </ul>
              </div>
              <div class="box_item_footer d-flex align-items-center justify-content-between">
              <small><?php echo 'From &#8377 '.$presidentialSuitePrice.'/night'; ?></small>
                <a href="#0" class="btn_4 learn-more">
                  <span class="circle">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Book Now</span>
                </a>
                <a href="room-details-presidential.php" class="animated_link">
                  <strong>Read more</strong>
                </a>
              </div>
              <!-- /box_item_footer -->
            </div>
            <!-- /box_item_info -->
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
      </div>
      <!-- /row_list_version_1 -->

      <div class="row_list_version_1">
        <div class="pinned-image rounded_container pinned-image--medium">
          <div class="pinned-image__container">
            <img src="img/rooms/1350-by-350tiger.jpg" alt="">
          </div>
        </div>
        <!-- /pinned-image -->
        <div class="row justify-content-end">
          <div class="col-lg-8">
            <div class="box_item_info float-lg-end" data-jarallax-element="-30">
              <small>Tiger Den</small>
              <h2>Tiger Den</h2>
              <p>The Tiger Den, one of our distinguished room offerings, captures The essence of refined comfort and
                elegance. Thoughtfully designed with meticulous attention to detail, this accommodation presents a
                harmonious blend of modern sophistication and a serene ambiance</p>
              <div class="facilities clearfix">
                <ul>
                  <li>
                    <i class="customicon-double-bed"></i> King Size Bed
                  </li>
                  <li>
                    <i class="customicon-wifi"></i> Free Wifi
                  </li>
                  <li>
                    <i class="customicon-television"></i> 32 Inc TV
                  </li>
                </ul>
              </div>
              <div class="box_item_footer d-flex align-items-center justify-content-between">
              <small><?php echo 'From &#8377 '.$tigerDenPrice.'/night'; ?></small>
                <a href="#0" class="btn_4 learn-more">
                  <span class="circle">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Book Now</span>
                </a>
                <a href="room-details-tiger.php" class="animated_link">
                  <strong>Read more</strong>
                </a>
              </div>
              <!-- /box_item_footer -->
            </div>
            <!-- /box_item_info -->
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
      </div>
      <!-- /row_list_version_1 -->

      <div class="row_list_version_1">
        <div class="pinned-image rounded_container pinned-image--medium">
          <div class="pinned-image__container">
            <img src="img/rooms/1350-by-350countryard.jpg" alt="">
          </div>
        </div>
        <!-- /pinned-image -->
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <div class="box_item_info" data-jarallax-element="-30">
              <small>Harmonious Blend of Luxury</small>
              <h2>Countryard Suites</h2>
              <p>Our Courtyard Suites epitomize a harmonious blend of luxury and comfort. Thoughtfully designed, these
                suites offer a spacious and inviting ambiance that complements your stay with us. Overlooking our serene
                courtyard, they provide a tranquil retreat within the heart of our establishment</p>
              <div class="facilities clearfix">
                <ul>
                  <li>
                    <i class="customicon-double-bed"></i> King Size Bed
                  </li>
                  <li>
                    <i class="customicon-wifi"></i> Free Wifi
                  </li>
                  <li>
                    <i class="customicon-television"></i> 32 Inc TV
                  </li>
                </ul>
              </div>
              <div class="box_item_footer d-flex align-items-center justify-content-between">
              <small><?php echo 'From &#8377 '.$countryardSuitePrice.'/night'; ?></small>
                <a href="#0" class="btn_4 learn-more">
                  <span class="circle">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Book Now</span>
                </a>
                <a href="room-details-countryard.php" class="animated_link">
                  <strong>Read more</strong>
                </a>
              </div>
              <!-- /box_item_footer -->
            </div>
            <!-- /box_item_info -->
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
      </div>
      <!-- /row_list_version_1 -->

      <div class="row_list_version_1">
        <div class="pinned-image rounded_container pinned-image--medium">
          <div class="pinned-image__container">
            <img src="img/rooms/1350-by-350leopard.jpg" alt="">
          </div>
        </div>
        <!-- /pinned-image -->
        <div class="row justify-content-end">
          <div class="col-lg-8">
            <div class="box_item_info float-lg-end" data-jarallax-element="-30">
              <small>Redefines Luxury and Exclusivity</small>
              <h2>Leopard’s Lair</h2>
              <p>The Leopard's Lair, an exclusive offering within our establishment, redefines luxury and exclusivity.
                Painstakingly designed to create a haven of opulence, this accommodation blends lavish comfort with an
                ambiance of refined sophistication</p>
              <div class="facilities clearfix">
                <ul>
                  <li>
                    <i class="customicon-double-bed"></i> King Size Bed
                  </li>
                  <li>
                    <i class="customicon-wifi"></i> Free Wifi
                  </li>
                  <li>
                    <i class="customicon-television"></i> 32 Inc TV
                  </li>
                </ul>
              </div>
              <div class="box_item_footer d-flex align-items-center justify-content-between">
              <small><?php echo 'From &#8377 '.$leopardsLairPrice.'/night'; ?></small>
                <a href="#0" class="btn_4 learn-more">
                  <span class="circle">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Book Now</span>
                </a>
                <a href="room-details-leopard.php" class="animated_link">
                  <strong>Read more</strong>
                </a>
              </div>
              <!-- /box_item_footer -->
            </div>
            <!-- /box_item_info -->
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
      </div>
      <!-- /row_list_version_1 -->

      <div class="row_list_version_1">
        <div class="pinned-image rounded_container pinned-image--medium">
          <div class="pinned-image__container">
            <img src="img/rooms/1350-by-350deer.jpg" alt="">
          </div>
        </div>
        <!-- /pinned-image -->
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <div class="box_item_info" data-jarallax-element="-30">
              <small>Fusion of Comfort and Sophistication </small>
              <h2>Deer Park</h2>
              <p>Our Courtyard Suites epitomize a harmonious blend of luxury and comfort. Thoughtfully designed, these
                suites offer a spacious and inviting ambiance that complements your stay with us. Overlooking our serene
                courtyard, they provide a tranquil retreat within the heart of our establishment</p>
              <div class="facilities clearfix">
                <ul>
                  <li>
                    <i class="customicon-double-bed"></i> King Size Bed
                  </li>
                  <li>
                    <i class="customicon-wifi"></i> Free Wifi
                  </li>
                  <li>
                    <i class="customicon-television"></i> 32 Inc TV
                  </li>
                </ul>
              </div>
              <div class="box_item_footer d-flex align-items-center justify-content-between">
              <small><?php echo 'From &#8377 '.$deerParkPrice.'/night'; ?></small>
                <a href="#0" class="btn_4 learn-more">
                  <span class="circle">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Book Now</span>
                </a>
                <a href="room-details-deer.php" class="animated_link">
                  <strong>Read more</strong>
                </a>
              </div>
              <!-- /box_item_footer -->
            </div>
            <!-- /box_item_info -->
          </div>
          <!-- /col -->
        </div>
        <!-- /row -->
      </div>
    </div>
    <!-- /container -->

    <div class="container margin_120_95">
      <div class="title text-center mb-5">
        <small data-cue="slideInUp">Paradise Hotel</small>
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
      <!-- /Row -->
      <hr class="more_margin">
      <div class="row justify-content-between margin_60_0">
        <div class="col-lg-4">
          <div class="title">
            <small>Countryard Hotel Faq</small>
            <h3>Frequently Questions</h3>
          </div>
          <p>Can’t find your question in the list?
            Let us know your questions.</p>
          <p><a href="contacts.html" class="animated_link"><strong>Contact Us <i
                  class="bi bi-arrow-right"></i></strong></a></p>
        </div>
        <div class="col-lg-7">
          <div role="tablist" class="mb-5 accordion" id="faq">
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne_product" aria-expanded="false">
                    <i class="indicator bi-plus-lg"></i>Cancellation
                  </a>
                </h5>
              </div>
              <div id="collapseOne_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                <div class="card-body">
                  <p>Our cancellation policy outlines the guidelines and conditions related to canceling your resort
                    booking. It's important to review this policy before making any changes to your reservation.</p>
                </div>
              </div>
            </div>
            <!-- /card -->
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo_product" aria-expanded="false">
                    <i class="indicator bi-plus-lg"></i>Payments
                  </a>
                </h5>
              </div>
              <div id="collapseTwo_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                <div class="card-body">
                  <p>We accept various payment methods, including major credit cards, debit cards, and electronic bank
                    transfers. Please check our website or contact our reservations team for specific options.</p>

                </div>
              </div>
            </div>
            <!-- /card -->
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree_product" aria-expanded="false">
                    <i class="indicator bi-plus-lg"></i>Check In / Out Rules
                  </a>
                </h5>
              </div>
              <div id="collapseThree_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                <div class="card-body">
                  <p>Early check-in is subject to availability and may incur an additional fee. Please contact our
                    reservations team in advance to inquire about early check-in options.</p>
                  </p>
                </div>
              </div>
            </div>
            <!-- /card -->
            <div class="card">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour_product" aria-expanded="false">
                    <i class="indicator bi-plus-lg"></i>Disable Access
                  </a>
                </h5>
              </div>
              <div id="collapseFour_product" class="collapse" role="tabpanel" data-bs-parent="#faq">
                <div class="card-body">
                  <p>Yes, we are committed to providing accessible facilities. Our resort is equipped with ramps,
                    elevators, and other amenities to ensure ease of movement for guests with disabilities.</p>

                </div>
              </div>
            </div>
            <!-- /card -->
          </div>
          <!-- /accordion -->
        </div>
      </div>
      <!-- /Row -->
    </div>
    <!-- /bg_white -->


    <!-- /container -->

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

</body>

</html>