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
            background-image: url('resources/homebg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            z-index: -99992;
            height: 100vh;
            position: absolute;
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

<body class="bg-dark overflow-x-hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php require "header.php" ?>
                <span class="text-warning h1"></span>
            </div>
            <div class=" background">
            </div>
            <div class="col-12 ">
                <div class=" col-12 container111"></div>
                <div style="height: 100vh;" class="row  align-items-center justify-content-center ">
                    <div class="col-12  col-md-12 justify-content-center mt-5 col-lg-5">
                        <div id="carouselExampleSlidesOnly"  class=" mt-5 carousel slide border-radius" data-bs-ride="carousel">
                            <div style="border-radius: 25px;" class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="resources\slideshow\20220916015138_1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources\slideshow\20220919200632_1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources\slideshow\20221110014335_1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources\slideshow\20221223015357_1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources\slideshow\20221229213840_1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources\slideshow\20230110042851_1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources\slideshow\20230128044144_1.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="text-light mx-5 text-uppercase sl h3">
                            <span>colombo city roleplay next level</span>
                        </div>
                        <div class="text-uppercase mx-5 rpl text-light">
                            <span style="
                            
                            background: linear-gradient(5deg, blue,rgb(132, 132, 245));
                            background-clip: text;
                            -webkit-background-clip: text;
                            color: transparent;
                            display: inline-block;
                            animation: snake 10s linear infinite; 
                            " class="shadow">roleplay</span>
                        </div>
                        <div class="text-uppercase mx-5 fw-bold h2 cc text-light">
                            <span style="
                            background: linear-gradient(45deg, pink,red);
                            background-clip: text;
                            -webkit-background-clip: text;
                            color: transparent;
                            display: inline-block;
                            animation: snake 10s linear infinite; 
                            font-weight:bolder;
                            ">colombo city roleplay </span><br>
                        </div>
                        <a href="#" class="mx-5"><span class="btn btn-info span1 text-light fw-bolder" style="border-radius: 25px;">Whitelist &RightArrow;</span></a>
                    </div>
                    <div class="col-lg-5  d-none d-lg-block ">
                        <div class="row ">
                            <div style="height: 100vh;" class="col-12 bgbg d-block ">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="loading-container">
        <div class="shutter top">
            <h1 style="font-size: 5vw;"  class="loading-text d-lg-none  h1"></h1>
        </div>
        <div class="shutter bottom">
            <h1 style="font-size: 5vw;" class="loading-text h1"></h1>
        </div>
    </div>

    <header class="landing-page">

    </header>
    <script src="assets/js/anime.min.js"></script>
    <script>
        const container = document.querySelector(".container111"); // Use a dot (.) to select by class name
        for (let i = 0; i < 200; i++) {
            let blocks = document.createElement('div');
            blocks.classList.add('block');
            container.appendChild(blocks);
        }

        function animateBlocks() {
            anime({
                targets: '.block',
                translateX: function() {
                    return anime.random(-800, 800);
                },
                translateY: function() {
                    return anime.random(-600, 600);
                },
                scale: function() {
                    return anime.random(1, 5);
                },
                easing: 'linear',
                duration: 1000,
                delay: anime.stagger(10),
                complete: animateBlocks,
            })
        }
        animateBlocks();

        const loadingText = [...document.querySelectorAll('.loading-text')];
        let text = 'loading...';
        for (let i = 0; i < text.length; i++) {
            setTimeout(() => {
                loadingText[0].innerHTML += text[i];
                loadingText[1].innerHTML += text[i];
            }, 500 * i);
        }
    </script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


</body>

</html>