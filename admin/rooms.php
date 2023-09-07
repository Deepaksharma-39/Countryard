<?php
require "auth_check.php";
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
    <!-- Opacity Mask -->

    <?php include_once 'navbar.php'; ?>

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
                <a href="reviews.php" id="review">Messages</a>
                <a href="resort.php" id="resort">Resort Details</a>
                <a href="reservation.php" id="office">Office Details</a>
                <a href="gallery.php" id="gallery">Gallery</a>
            </div>

            <div class="content">


                <table>
                    <thead>
                        <tr>
                            <th>Suite Type</th>
                            <th>Total Rooms</th>
                            <th>Price/Room</th>
                            <th>Customize</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once '../config.php';
                        $conn=connectToDatabase();

                        // Table names
                        $tables = [
                            "countryard_suite",
                            "presidential_suite",
                            "leopards_lair",
                            "deer_park",
                            "tiger_den"
                        ];

                        // Initialize arrays to store prices and room counts
                        $prices = [];
                        $rooms = [];

                        // Retrieve prices and room counts for each table
                        foreach ($tables as $table) {
                            $query = "SELECT price_per_rooms, total_rooms FROM $table";
                            $result = mysqli_query($conn, $query);

                            if ($row = mysqli_fetch_assoc($result)) {
                                $prices[$table] = $row['price_per_rooms'];
                                $rooms[$table] = $row['total_rooms'];
                            }
                        }
                        closeDatabaseConnection($conn);
        $suiteData = [
            [$tables[0], $rooms["countryard_suite"], $prices["countryard_suite"]],
            [$tables[1], $rooms["presidential_suite"], $prices["presidential_suite"]],
            [$tables[2], $rooms["leopards_lair"], $prices["leopards_lair"]],
            [$tables[3], $rooms["deer_park"], $prices["deer_park"]],
            [$tables[4], $rooms["tiger_den"], $prices["tiger_den"]]
        ];

        foreach ($suiteData as $suite) {
            echo "<tr>";
            echo "<td>" . $suite[0] . "</td>";
            echo "<td>" . $suite[1] . "</td>";
            echo "<td>" . $suite[2] . "</td>";
            echo "<td><button class='edit-button'>Edit</button></td>";
            echo "</tr>";
        }
        
        ?>
                    </tbody>
                </table>
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

    <script>
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            const row = button.parentNode.parentNode;
            const cells = row.querySelectorAll('td');

            if (button.textContent === 'Edit') {
                button.textContent = 'Submit';
                cells[1].innerHTML =
                    `<input type="number" name="${cells[0].innerText}_rooms" value="${cells[1].innerText}">`;
                cells[2].innerHTML =
                    `<input type="number" name="${cells[0].innerText}_price" value="${cells[2].innerText}">`;
            } else {
                const updatedRooms = cells[1].querySelector('input').value;
                const updatedPrice = cells[2].querySelector('input').value;
                const suiteType = cells[0].innerText;

                const formData = new FormData();
                formData.append('suiteType', suiteType);
                formData.append('updatedRooms', updatedRooms);
                formData.append('updatedPrice', updatedPrice);

                fetch('update_room_data.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        // Handle response if needed
                        console.log(data);
                        // revert to static text
                        button.textContent = 'Edit';
                        cells[1].innerHTML = updatedRooms;
                        cells[2].innerHTML = updatedPrice;
                        alert("Room Details Updated successfully!");
                    })
                    .catch(error => {
                        // Handle error if needed
                        console.error(error);
                    });
            }
        });
    });
    </script>




</body>

</html>