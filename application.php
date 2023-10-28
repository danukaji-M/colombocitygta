<?php
session_start();
require "database/connection.php";
$_SESSION['userData'];
$_SESSION['logged_in'];
if(isset($_SESSION['userData'])){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLOMBO CITY&copy; || ROLEPLAY&trade; APPLICATIONS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>

    </style>
</head>

<body class="bg-dark overflow-x-hidden">
    <div class="conainer-fluid">
        <div class="row">
            <?php require "header.php" ?>
            <div class="col-12 text-center">
                <span class="h1 text-warning">JOB APPLICATION FORM</span>
                <div class="row justify-content-center ">
                    <div class="col-10 text-start">
                        <div class="row">
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">JOB TITLE</label>
                                <input class="form-control text-uppercase bg-secondary fw-bolder text-light" id="jt"
                                    value="<?php echo $_GET['jobtt'] ?>" type="text" required disabled>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">JOB TITLE</label>
                                <input class="form-control text-uppercase" id="jt" placeholder="XXXX" type="text"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="assets/js/script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</html>
<?php
}else{
    header("Location: app/index.php");
}
?>