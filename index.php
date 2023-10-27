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
                    <h1 class=" text-uppercase fw-bolder text-light mt-5">කොළඹ නගරේ ROLEPLAY</h1>
                    <span class=" text-light  text-bold text-capitalize">Welcome To Colombo City Roleplay, An immersive GTA FiveM server built on the Nopixel-Inspired Qbcore custom Framework. Delivering An Unmatched Roleplaying Experience. Dive Into Our World, Characterized By Serious Roleplay, A Rich Array Of Over 50 Optimized Jobs, Custom Maps, Scripts, Clothing, Cars, And Much More. Explore A Meticulously Crafted Environment Designed To Provide An Unforgettable Escopode, Solidifying Our Position As One Of Sri Lanka's Premier RP Servers.
                        <br><br>
                        Step Into The Dynamic Metropolis Of Colombo City Roleplay. Where An Authentic GTA FiveM Adventure Awaits. Immerse Yourself In Our Carefully Curated Features, Fostering A Playground For Creativity And Strategic Thinking. Unleash Your Potential As You Navigate Through A Myriad Of Seamlessly Woven Possibilities, Redefining The Standards Of Virtual Immersion Within Sri Lanka's Finest RP Servers.
                     </span>
                    <br><br>
                    <form action="https://discord.gg/cnrplk" method="get" target="_blank">
                        <button type="submit" style="font-size: 20px;" class="btn btn-light text-secondary fw-bold">Get Whitelisted</button>
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

</body>

</html>