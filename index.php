<?php
session_start();
require "database/connection.php";


$_SESSION['userData'];
$_SESSION['logged_in'];
if(empty($_GET['msg'])){
    $msg = "";  
}else{
    $mes = $_GET['msg'];
}

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
    <style>
        .background {
            background-image: url('assets/resources/homebg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -12;
            height: 100vh;
            position: relative;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            /* Webkit (Safari) */
            -moz-filter: blur(5px);
            /* Firefox */
            -o-filter: blur(5px);
            /* Opera */
            -ms-filter: blur(5px);
            opacity: 0.5;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php require "header.php" ?>
                <span class="text-warning h1"></span>
            </div>
            <div class="col-12 background">
            </div>
            <div class="col-12 justify-content-center">

            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/anime.js"></script>
    <script src="assets/js/anime.es.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        //scripts anime.js
        alert("<?php echo $mes ?>")
        window.location= "index.php";
    </script>
</body>

</html>