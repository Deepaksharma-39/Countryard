<?php include_once '../config.php'; 
                $conn = connectToDatabase();
                $resortDetails = getResortDetails($conn);
                $phone_number1=$resortDetails['resort_phone_number1'];
                closeDatabaseConnection($conn)                
                ?>

<header class="reveal_header">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <!-- header logo -->
                <a href="../index.php" class="logo_normal"><img src="../img/logo.png" width="auto" height="60" alt="" /></a>
                <a href="../index.php" class="logo_sticky"><img src="../img/logo_sticky.png" width="auto" height="60"
                        alt="" /></a>
            </div>
            <div class="col-6">
                <nav>
                    <ul>
                        <!-- booknow button 1 -->
                        <li>
                            <a href="https://hotels.eglobe-solutions.com/hotelcountryard/booking/detail"
                                class="btn_1 btn_scrollto">Book Now</a>
                        </li>
                        <li>
                            <!-- hamburger -->

                            <div class="hamburger_2 open_close_nav_panel">
                                <div class="hamburger__box">
                                    <div class="hamburger__inner"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- /container -->
</header><!-- End Header -->

<div class="nav_panel">
    <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
    <div class="logo_panel"><img src="../img/logo_sticky.png" width="auto" height="60" alt=""></div>
    <div class="sidebar-navigation">
        <nav>
            <ul class="level-1">
                <li><a href="../index.php">Home</a>

                </li>
                <li class="parent"><a href="#0">Rooms & Suites</a>
                    <ul class="level-2">
                        <li class="back"><a href="#0">Back</a></li>
                        <li><a href="../room.php">Room Details</a></li>
                        <li><a href="../room-details-presidential.php">Presidential Suites</a></li>
                        <li><a href="../room-details-countryard.php">Countryard Suites</a></li>
                        <li><a href="../room-details-tiger.php">Tiger Den</a></li>
                        <li><a href="../room-details-leopard.php">Leopard’s Lair</a></li>
                        <li><a href="../room-details-deer.php">Deer Park</a></li>

                    </ul>
                </li>
                <li><a href="../gallery.php">Gallery</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../contact.php">Contact</a></li>

                <li><a href="../privacypolicy.php">Privacy Policy</a>
                <li><a href="../terms&condition.php">Terms & Conditions</a>

                </li>
            </ul>
            <div class="panel_footer">
                
                <div class="phone_element"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and
                                bookings</em> +91- <?php echo $phone_number1; ?> </span></a></div>
            </div>
            <!-- /panel_footer -->
        </nav>
    </div>
    <!-- /sidebar-navigation -->
</div>