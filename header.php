<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .random-color {
            color: #<?php echo dechex(rand(0x000000, 0xEEEEEE)); ?>
        }
    </style>
</head>

<body class="">
    <nav class="navbar  fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="resources/logo.png" class="images" alt="">
            </a>
            <button class="navbar-toggler text-bg-info " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas bg-dark text-light fw-bolder offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title random-color text-capitalize" id="offcanvasNavbarLabel">
                        <?php
                        if (isset($_SESSION['userData'])) {
                            $discord_id = $_SESSION['userData']['discord_id'];
                            $avatar = $_SESSION['userData']['avatar'];
                        ?>

                            <img class="userprofile" style="
                                height: 50px;
                                width: auto;
                                border-radius: 100px;
                            " src="<?php echo "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg" ?>" alt="">
                        <?php
                            echo $_SESSION['userData']['name'];
                        } else {
                            echo "User";
                        }
                        ?>
                    </h5>
                    <button type="button" class="btn-close text-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class=" text-light offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../application.php">Application</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../playerDashboard.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../streamers.php">Streamer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../aboutus.php">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>