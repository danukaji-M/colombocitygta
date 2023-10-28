<?php
session_start();
require "database/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOBS COLOMBO CITY&copy; || ROLEPLAY&trade;</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;400&display=swap" rel="stylesheet">
</head>


<body style="  background: linear-gradient(to right, #05090a, #000000, #0a1115);"
    style="  background: linear-gradient(to right, #05090a, #000000, #0a1115);" class=" overflow-x-hidden">
    <div class="container-fluid">
        <div class="row bg-dark">
            <?php
            require "header.php";
            ?>
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="img" style="height:50vh;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-5 offset-lg-1 ">
                        <div class="row">
                            <div class="col-12">
                                <span class="h6 text-warning text-decoration-underline text-uppercase">DEPERTMENT OF
                                    POLICE</span>
                                <h1 class="h1 text-light text-uppercase"> POLICE DEPARTMENT</h1>
                                <span class="text-light fw-bold">

                                </span>
                                <a href="" style="height: 2.5rem; width: 8rem;"
                                    class="btn btn-warning fw-bolder text-light">APPLY &Tab; &RightArrow;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 mt-4 mt-lg-0 offset-lg-1 ">
                        <div class="row">
                            <div class="col-12">
                                <span class="h6 text-warning text-decoration-underline text-uppercase">DEPERTMENT OF
                                    POLICE</span>
                                <h1 class="h1 text-light text-uppercase"> POLICE DEPARTMENT</h1>
                                <span class="text-light fw-bold">

                                </span>
                                <a href="" style="height: 2.5rem; width: 8rem;"
                                    class="btn btn-warning fw-bolder text-light">APPLY &Tab; &RightArrow;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require "footer.php";
            ?>
        </div>
    </div>
</body>

</html>