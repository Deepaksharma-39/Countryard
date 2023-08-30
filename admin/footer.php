<?php include_once '../config.php';;
$conn = connectToDatabase();
// creating all the dynamic input variables
// Resort Details
$resortDetails = getResortDetails($conn);

$resort_email=$resortDetails['resort_email'];
$resort_phone_number1=$resortDetails['resort_phone_number1'];
$resort_phone_number2=$resortDetails['resort_phone_number2'];

// Reservation
$officeDetails=getReservationOfficeDetails($conn);

$addressline1=$officeDetails['addressline1'];
$addressline2=$officeDetails['addressline2'];
$city=$officeDetails['city'];
$state=$officeDetails['state'];
$pincode=$officeDetails['pincode'];
$email=$officeDetails['email'];
$phone_number1=$officeDetails['phone_number1'];
$phone_number2=$officeDetails['phone_number2'];
$phone_number3=$officeDetails['phone_number3'];

// closing database connection
closeDatabaseConnection($conn)    
?>

<footer class="revealed">
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" data-background="url(../img/rooms/footer.jpg)"></div>
    </div>
    <div class="container">
        <div class="row move_content">

            <div class="col-lg-4 col-md-12">
                <h5>Resort Details</h5>
                <ul>
                    <li>
                        Motipur, Chhoi Village, Jim Corbett, <br />Ramnagar-244715,<br/> Uttarakhand
                        <br /><br />
                    </li>
                    <li>
                        <strong><a href="#0"> <?php echo $resort_email;?></a></strong>
                    </li>
                    <li>
                        <strong><a href="#0">+91-<?php echo $resort_phone_number1;?></a></strong><br />
                    </li>
                    <li>
                        <strong><a href="#0">+91-<?php echo $resort_phone_number2;?></a></strong><br /><br />
                    </li>

                </ul>

            </div>

            <div class="col-lg-3 col-md-6">
                <div id="contact2">
                    <h5>Reservation Office</h5>
                    
                    <ul>
                        <li>
                            <?php
                    echo $addressline1 . ' ' . $addressline2 . '<br/>';
                    echo $city . ' - ' . $pincode . '<br/>';
                    echo $state . '<br /><br />';
                ?>
                        </li>
                        <li>
                            <strong><a id="phoneNumber" href="#0"><?php echo $email;?></a></strong>
                        </li>
                        <li>
                            <strong>
                                <a id="phoneNumber" href="#0">
                                    <?php  
                            echo "+91-" . $phone_number1 . '<br />';
                        ?>
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a id="phoneNumber" href="#0">
                                    <?php
                            echo "+91-" . $phone_number2 . '<br />';
                        ?>
                                </a>
                            </strong>
                        </li>
                        <li>
                            <strong>
                                <a href="#0">
                                    <?php
                            echo "+91-" . $phone_number3 . '<br />';  
                           
                        ?>
                                </a>
                            </strong>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Explore</h5>
                <div class="footer_links">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../about.php">About us</a></li>
                        <li><a href="../contact.php">Contact us</a></li>
                        <li><a href="../gallery.php">Gallery</a></li>
                        <li><a href="../room.php">Rooms and Suites</a></li>
                        <li><a href="../privacypolicy.php">Privacy Policy</a></li>
                        <li><a href="../terms&condition.php">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61550289917163&mibextid=ZbWKwL"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61550289917163&mibextid=ZbWKwL"><i class="bi bi-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61550289917163&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=61550289917163&mibextid=ZbWKwL"><i class="bi bi-twitter"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!--/row-->
    </div>
    <!--/container-->
    <div class="copy">
        <div class="container">
            © Countryard - by
            <a href="https://www.ewdhotels.com/">EWD Hotels</a> | Design &
            Developed by <a href="https://www.techplek.com/">TechPlek</a> <span style="color: red;">&#10084;</span>
        </div>
    </div>
</footer>