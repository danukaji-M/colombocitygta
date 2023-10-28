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

<body style="  background: linear-gradient(to right, #05090a, #000000, #0a1115);"
    class=" overflow-y-hidden overflow-x-hidden">
    <div class="container-fluid">
        <div class="row">
            <?php require "header.php" ?>
            <<<<<<< HEAD <div class="col-12 justify-content-center mt-lg-5">
                <div class="row">
                    <div class="col-10 offset-1 col-lg-5 mt-lg-5">
                        <h1 class=" text-uppercase fw-bolder text-light mt-5">කොළඹ නගරේ ROLEPLAY</h1>
                        <span class=" text-light  text-bold text-capitalize">Welcome to Colombo City Roleplay, an
                            immersive
                            GTA FiveM server built on the Nopixel-inspired qbcore framework. delivering an unmatched
                            roleplaying experience. Dive into our world, characterized by serious roleplay, a rich
                            array of
                            over 50 optimized jobs, custom maps, scripts, clothing, cars, and much more. Explore a
                            meticulousty crafted environment designed to provide an unforgettable escopode,
                            solidifying our
                            position as one of Sri Lanka's premier RP servers.
                            <br><br>
                            Step into the dynamic metropolis of Colombo City Roleplay. where an authentic GTA FiveM
                            adventure awaits. Immerse yourself in our carefully curated features, fostering a
                            playground for
                            creativity and strategic thinking. Unleash your potential as you navigate through a
                            myriad of
                            seamiessly woven possibilities, redefining the standards of virtual immersion within Sri
                            Lanka's
                            finest RP servers. </span>
                        <br><br>
                        <form action="https://discord.gg/cnrplk" method="get" target="_blank">
                            <button type="submit" style="font-size: 20px;"
                                class="btn btn-light text-secondary fw-bold">Get
                                Whitelisted</button>
                        </form>
                    </div>
                    <div class="col-6 d-none d-lg-block">
                        <div class="sideimg"></div>
                    </div>
                    <?php require "footer.php"?>
                    <span class="text-warning h1"></span>
                </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 justify-content-center mt-lg-5">
                <div class="row">
                    <div class="col-10 offset-1 col-lg-5 mt-lg-5">
                        <h1 class=" text-uppercase fw-bolder text-light mt-5">කොළඹ නගරේ ROLEPLAY</h1>
                        <span class=" text-light  text-bold text-capitalize">Welcome To Colombo City Roleplay, An
                            immersive GTA FiveM server built on the Nopixel-Inspired Qbcore custom Framework. Delivering
                            An Unmatched Roleplaying Experience. Dive Into Our World, Characterized By Serious Roleplay,
                            A Rich Array Of Over 50 Optimized Jobs, Custom Maps, Scripts, Clothing, Cars, And Much More.
                            Explore A Meticulously Crafted Environment Designed To Provide An Unforgettable Escopode,
                            Solidifying Our Position As One Of Sri Lanka's Premier RP Servers.
                            <br><br>
                            Step Into The Dynamic Metropolis Of Colombo City Roleplay. Where An Authentic GTA FiveM
                            Adventure Awaits. Immerse Yourself In Our Carefully Curated Features, Fostering A Playground
                            For Creativity And Strategic Thinking. Unleash Your Potential As You Navigate Through A
                            Myriad Of Seamlessly Woven Possibilities, Redefining The Standards Of Virtual Immersion
                            Within Sri Lanka's Finest RP Servers.
                        </span>
                        <br><br>
                        <form action="https://discord.gg/cnrplk" method="get" target="_blank">
                            <button type="submit" style="font-size: 20px;"
                                class="btn btn-light text-secondary fw-bold">Get Whitelisted</button>
                        </form>
                    </div>
                    <div class="col-6 d-none d-lg-block">
                        <div class="sideimg"></div>
                    </div>
                    <?php require "footer.php"

                    ?>
                </div>
            </div>
        </div>
        <div style="width: 100vw; overflow-y:hidden;" class="loading-page">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M48 256C48 141.1 141.1 48 256 48c63.1 0 119.6 28.1 157.8 72.5c8.6 10.1 23.8 11.2 33.8 2.6s11.2-23.8 2.6-33.8C403.3 34.6 333.7 0 256 0C114.6 0 0 114.6 0 256v40c0 13.3 10.7 24 24 24s24-10.7 24-24V256zm458.5-52.9c-2.7-13-15.5-21.3-28.4-18.5s-21.3 15.5-18.5 28.4c2.9 13.9 4.5 28.3 4.5 43.1v40c0 13.3 10.7 24 24 24s24-10.7 24-24V256c0-18.1-1.9-35.8-5.5-52.9zM256 80c-19 0-37.4 3-54.5 8.6c-15.2 5-18.7 23.7-8.3 35.9c7.1 8.3 18.8 10.8 29.4 7.9c10.6-2.9 21.8-4.4 33.4-4.4c70.7 0 128 57.3 128 128v24.9c0 25.2-1.5 50.3-4.4 75.3c-1.7 14.6 9.4 27.8 24.2 27.8c11.8 0 21.9-8.6 23.3-20.3c3.3-27.4 5-55 5-82.7V256c0-97.2-78.8-176-176-176zM150.7 148.7c-9.1-10.6-25.3-11.4-33.9-.4C93.7 178 80 215.4 80 256v24.9c0 24.2-2.6 48.4-7.8 71.9C68.8 368.4 80.1 384 96.1 384c10.5 0 19.9-7 22.2-17.3c6.4-28.1 9.7-56.8 9.7-85.8V256c0-27.2 8.5-52.4 22.9-73.1c7.2-10.4 8-24.6-.2-34.2zM256 160c-53 0-96 43-96 96v24.9c0 35.9-4.6 71.5-13.8 106.1c-3.8 14.3 6.7 29 21.5 29c9.5 0 17.9-6.2 20.4-15.4c10.5-39 15.9-79.2 15.9-119.7V256c0-28.7 23.3-52 52-52s52 23.3 52 52v24.9c0 36.3-3.5 72.4-10.4 107.9c-2.7 13.9 7.7 27.2 21.8 27.2c10.2 0 19-7 21-17c7.7-38.8 11.6-78.3 11.6-118.1V256c0-53-43-96-96-96zm24 96c0-13.3-10.7-24-24-24s-24 10.7-24 24v24.9c0 59.9-11 119.3-32.5 175.2l-5.9 15.3c-4.8 12.4 1.4 26.3 13.8 31s26.3-1.4 31-13.8l5.9-15.3C267.9 411.9 280 346.7 280 280.9V256z" />
            </svg>


            <div class="name-container">
                <div class="logo-name">කොළඹ නගරේ ROLEPLAY</div>
            </div>
        </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="assets/js/script.js"></script>
</body>

</html>