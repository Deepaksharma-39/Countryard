<?php
require "auth_check.php";
include_once '../config.php';

$conn = connectToDatabase();
$resortinfo = getResortDetails($conn);
closeDatabaseConnection($conn);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Count ryard - by EWD</title>

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
                <a href="reviews.php" id="review">Messages</a>
                <a href="resort.php" id="resort">Resort Details</a>
                <a href="reservation.php" id="office">Office Details</a>
                <a href="gallery.php" id="gallery">Gallery</a>
            </div>
            <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $attributes = [
                    "Email" => $resortinfo['resort_email'],
                    "Phone 1" => $resortinfo['resort_phone_number1'],
                    "Phone 2" => $resortinfo['resort_phone_number2']
                ];
                
                foreach ($attributes as $attribute => $value) {
                    echo "<tr>";
                    echo "<td>" . $attribute . "</td>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";
                }
                
                $addressInfo = [
                    "Address line 1" => "Motipur",
                    "Address line 2" => "Chhoi Village, Jim Corbett",
                    "City" => "Ramnagar",
                    "State" => "Uttarakhand",
                    "Pincode" => "244715"
                ];
                
                foreach ($addressInfo as $attribute => $value) {
                    echo "<tr>";
                    echo "<td>" . $attribute . "</td>";
                    echo "<td>" . $value . "</td>";
                    echo "</tr>";
                }
                ?>
                        <tr>
                            <td><button class="edit-button">Edit</button></td>
                        </tr>
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
            const row = button.parentNode.parentNode.parentNode;
            const valueCells = row.querySelectorAll(
            'td:nth-child(n+2):nth-child(-n+4)'); // Select only the first three value cells

            if (button.textContent === 'Edit') {
                button.textContent = 'Submit';



                for (let i = 0; i <= 2; i++) {
                    const value = valueCells[i].textContent;
                    valueCells[i].innerHTML = `<input type="text" value="${value}">`;
                };
            } else {
                // const updatedValues = Array.from(valueCells, cell => cell.querySelector('input').value);

                const updatedEmail = valueCells[0].querySelector('input').value;
                const updatedPhone1 = valueCells[1].querySelector('input').value;
                const updatedPhone2 = valueCells[2].querySelector('input').value;
                // console.log(updatedValues);

                const formData = new FormData();


                formData.append('updatedEmail', updatedEmail);
                formData.append('updatedPhone1', updatedPhone1);
                formData.append('updatedPhone2', updatedPhone2);

                // console.log(updatedEmail);

                fetch('update_resortDetails.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        // Handle response if needed
                        console.log(data);
                        // revert to static text

                        valueCells[0].innerHTML = updatedEmail;
                        valueCells[1].innerHTML = updatedPhone1;
                        valueCells[2].innerHTML = updatedPhone2;
                        alert("Data updated successfully");
                        button.textContent = 'Edit';
                    })
                    .catch(error => {
                        // Handle error if needed
                        console.error(error);
                        alert("Failed");
                    });
            }
        });
    });
    </script>

</body>

</html>