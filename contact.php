<?php
include_once 'config.php';

// $addressline1=$addressline2=$city=$state=$pincode=$email=$resort_email=$resort_phone_number1=$resort_phone_number2=$office_mobile1=$office_mobile2=$office_mobile3;

$conn = connectToDatabase();

// resort Details
$resortDetails = getResortDetails($conn);
$resort_email=$resortDetails['resort_email'];
$resort_phone_number1=$resortDetails['resort_phone_number1'];
$resort_phone_number2=$resortDetails['resort_phone_number2'];


// office Details
$officeDetails = getReservationOfficeDetails($conn);
$addressline1=$officeDetails['addressline1'];
$addressline2=$officeDetails['addressline2'];
$city=$officeDetails['city'];
$state=$officeDetails['state'];
$pincode=$officeDetails['pincode'];
$email=$officeDetails['email'];
$office_mobile1=$officeDetails['phone_number1'];
$office_mobile2=$officeDetails['phone_number2'];
$office_mobile3=$officeDetails['phone_number3'];

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
    <title>Countryard - Contact Us</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.webp">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.webp">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.webp">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.webp">

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
            <img class="jarallax-img" src="img/contact-us.webp" alt="">
            <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero"
                data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <small class="slide-animated one">Luxury Resort Experience</small>
                    <h1 class="slide-animated two">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info" id="contact">
                        <ul class="clearfix">

                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div>Resort Details</div>
                                <div>Motipur, Chhoi Village, Jim Corbett, Ramnagar-244715<br /> Uttarakhand</div><br />
                                <div>Reservation Office</div>
                                <div>
                                    <?php
                    echo $addressline1 . ' ' . $addressline2 . '<br/>';
                    echo $city . ' - ' . $pincode . '<br/>';
                    echo $state . '<br /><br />';
                    ?>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>

                                <p>

                                    <a href="mailto:<?php echo $email; ?>"><?php echo  $resort_email; ?></a>
                                    <!-- <a href="mailto:<?php echo $resort_email; ?>"><?php echo $email; ?></a> -->
                                </p>

                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>

                                <div>Resort details</div>
                                <div>+91 <?php echo $resort_phone_number1; ?><br />+91
                                    <?php echo $resort_phone_number2; ?></div><br />

                                <div>Reservation office</div>
                                <div>+91 <?php echo $office_mobile1; ?> <br /> +91 <?php echo $office_mobile2; ?> <br />
                                    +91 <?php echo $office_mobile3; ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Get in Touch</h3>
                    <div id="message-contact"></div>
                    <form method="post" action="phpmailer/contact_template_email.php" id="contactform"
                        autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name_contact" name="name_contact"
                                        placeholder="Name">
                                    <label for="name_contact">Name</label>
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
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Message" id="message_contact"
                                name="message_contact"></textarea>
                            <label for="message_contact">Message</label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="verify_contact" name="verify_contact"
                                        placeholder="Are you human? 3 + 1 =">
                                    <label for="verify_contact">Are you human? 3 + 1 =</label>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">
                            <input type="submit" value="Submit" class="btn_1 outline" id="submit-contact">
                        </p>
                    </form>
                    <div class="map_contact">
            <iframe src="https://maps.google.com/maps?q=29.3345,79.1386817&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="600"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
                </div>
            </div>
            <!-- /row -->
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
    <script src="js/common_scripts.js"></script>
    <script src="js/common_functions.js"></script>

</body>

</html>