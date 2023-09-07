<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Countryard - Admin Login</title>

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
     <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/vendors.min.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet" />

    <style>
    /* Style for form container */
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        width: 400px;
        margin: 0 auto;
    }

    /* Style for error message */
    .error {
        color: red;
        margin-bottom: 10px;
    }

    /* Style for SUCCES message */
    .success {
        color: green;
        margin-bottom: 10px;
    }

    /* Style for form labels */
    label {
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* Style for form inputs */
    input[type="text"],
    input[type="password"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        width: 100%;
        box-sizing: border-box;
    }

    /* Style for form button */
    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for form button hover effect */
    button[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>


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
                    <h1 class="slide-animated two">Admin Login</h1>
                </div>
            </div>
        </div>
        <!-- /Background Img Parallax -->

        <div class="content" style="margin: 20px ">
            <form action="signin_logic.php" method="post">
                <h2>Login</h2>
                <?php
            if (isset($_GET['error']) && !empty(trim($_GET['error']))) {
                $error = htmlspecialchars($_GET['error']);
                echo '<p class="error">' . $error . '</p>';
            }
            ?>
                <?php
            if (isset($_GET['success']) && !empty(trim($_GET['success']))) {
                $success = htmlspecialchars($_GET['success']);
                echo '<p class="success">' . $success . '</p>';
            }
            ?>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="User name">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>

        <!-- /container -->



        </div>
        </div>

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
    <!-- <script src="../js/datepicker_inline.js"></script> -->
</body>

</html>


