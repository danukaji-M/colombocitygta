<?php
session_start();
require "database/connection.php";


if (empty($_GET['msg'])) {
    $msg = "";
} else {
    $mes = $_GET['msg'];
    ?>
<script>
//scripts anime.js
alert("<?php echo $mes ?>")
window.location = "index.php";
</script>
<?php
}

//$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOMBO CITY&copy; || ROLEPLAY&trade;</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
    .background {
        background-image: url('resources/homebg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        z-index: -99992;
        height: 100vh;
        position: absolute;
        filter: blur(2px);
        -webkit-filter: blur(2px);
        /* Webkit (Safari) */
        -moz-filter: blur(2px);
        /* Firefox */
        -o-filter: blur(2px);
        /* Opera */
        -ms-filter: blur(2px);
        opacity: 0.2;
    }
    </style>
</head>

<body class="bg-dark overflow-x-hidden">
    <div class="container-fluid">
        <div class="row">
            <?php require "header.php" ?>
            <span class="text-warning h1"></span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 justify-content-center mt-lg-5">
            <div class="row">
                <div class="col-10 offset-1 col-lg-5 mt-lg-5">
                    <h1 class=" text-uppercase fw-bolder text-light mt-5">කොළබ නගරේ ROLEPLAY</h1>
                    <span class=" text-light  text-bold text-capitalize">Welcome to Colombo City Roleplay, an immersive
                        GTA FiveM server built on the Nopixel-inspired abcore framework. delivering an unmatched
                        roleplaying experience. Dive into our world, characterized by serious roleplay, a rich array of
                        over 50 optimized jobs, custom maps, scripts, clothing, cars, and much more. Explore a
                        meticulousty crafted environment designed to provide an unforgettable escopode, solidifying our
                        position as one of Sri Lanka's premier RP servers.
                        <br><br>
                        Step into the dynamic metropolis of Colombo City Roleplay. where an authentic GTA FiveM
                        adventure awaits. Immerse yourself in our carefully curated features, fostering a playground for
                        creativity and strategic thinking. Unleash your potential as you navigate through a myriad of
                        seamiessly woven possibilities, redefining the standards of virtual immersion within Sri Lanka's
                        finest RP servers. </span>
                    <br><br>
                    <button style="font-size: 20px;" class="btn btn-light text-secondary fw-bold">Play Now</button>
                </div>
                <div class="col-6 d-none d-lg-block">
                    <div class="sideimg"></div>
                </div>
            </div>
        </div>
    </div>
    </header>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>