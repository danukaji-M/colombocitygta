<?php
session_start();
require "database/connection.php";


$_SESSION['userData'];
$_SESSION['logged_in'];

//$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOMBO CITY&copy; || ROLEPLAY&trade;</title>
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\font.css">
    <link rel="stylesheet" href="assets\css\bootstrap.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
    <div class="container-fluid text-light ">
        <div class="row">
            <div class="col-12">
                <?php require "header.php" ?>
            </div>
            <div style="margin-top: 100px;" class="h1 text-light"><span class="d-none">hi</span></div>
        </div>
        <div class="row">
            <div class="col-12  mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 ">
                        <div class="h5 text-capitalize ">
                            SRI LANKA NEW EXPEIENCED ROLEPLAY
                        </div>
                        <div class=" xltext text-capitalize">
                            ROLEPLAY
                        </div>
                        <div class="text-capitalize">
                            <span style="border-radius: 25px;
                            border: 2px solid blue ;
                            " class="btn btn-info text-light hoverbtn fw-bolder">How to play &RightArrow;</span>
                            <span></span>
                        </div>
                    </div>
                    <div class="col-6 d-none d-lg-block ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/anime.js"></script>
    <script src="assets/js/anime.es.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //scripts anime.js
    </script>
</body>

</html>