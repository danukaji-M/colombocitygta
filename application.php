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
    <style>

    </style>
</head>

<body class="bg-dark mb-5 overflow-x-hidden">
    <div class="conainer-fluid">
        <div class="row ">
            <?php require "header.php" ?>
            <div class="col-12 text-center">
                <span class="h1 text-warning">JOB APPLICATION FORM</span>
                <br>
                <div class="row justify-content-center ">
                    <div class="col-10 text-start">
                        <div class="mt-5 row">
                            <span class="h3 text-info">Application prerequisites</span>
                            <?php 
                if($_GET['jobtt'] == 'doctor'){
                    echo '<ul class="text-start fw-bold list-unstyled text-light">
                    <li class=" " >1) At least 10 overall in-game hours</li>
                    <li class=" " >2) Must have an appropriate existing character</li>
                    <li class=" " >3) Must be in good standing concerning rule breaches.</li>
                    <br/>
                    <li class=" " >1)අවම වශයෙන් පැය 10ක ක්‍රීඩා කාලයක් තිබිය යුතුය‍‍.</li>
                    <li class=" " >2) සුදුසුකම් සහිත චරිතයක් තිබිය යුතුය</li>
                    <li class=" " >3) නීති කඩකිරීම් සම්බන්ධයෙන් හොඳ ස්ථාවරයක සිටිය යුතුය.</li>
                    </ul>';
                }
                ?>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">1&#41;. JOB TITLE</label>
                                <input class="form-control text-uppercase bg-secondary fw-bolder text-light" id="jt"
                                    value="<?php echo $_GET['jobtt'] ?>" type="text" required disabled>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">2&#41;.YOUR name</label>
                                <input class="form-control text-capitalize" id="name" placeholder="Enter Your Name"
                                    type="text" required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">3&#41;.date of birth</label>
                                <input class="form-control text-uppercase" id="dob" placeholder="" type="date" required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">4&#41;.whatsapp
                                    number</label>
                                <input class="form-control text-capitalize" id="wpn" placeholder="enter whatsapp number"
                                    type="text" required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">5&#41;.YOUR country</label>
                                <select name="country" class="countries form-control" id="countryId">
                                    <option value="0">Select Country</option>
                                    <?php
                                // Read the JSON file
                                $json_data = file_get_contents('countries.json');
                                $countries = json_decode($json_data);
                                
                                // Generate the dropdown options
                                foreach ($countries as $country) {
                                    echo "<option value='$country'>$country</option>";
                                }
                                ?>
                                </select>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">6&#41;. Discord Id (
                                    <?php echo $_SESSION['userData']['name']?>)
                                </label>
                                <input class="form-control text-capitalize" id="disid"
                                    value="<?php echo $_SESSION['userData']['discord_id'] ?>" type="text" disabled
                                    required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">7&#41;. steame profile
                                    link</label>
                                <input class="form-control text-capitalize" id="stlink" placeholder="enter link here"
                                    type="text" required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">8&#41;. How long has it been
                                    since
                                    you were issued with a warning or ban?</label>
                                <input class="form-control text-capitalize" id="warning" placeholder="TIme Duration"
                                    type="text">
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <span style="font-size: 14px;" class="text-warning text-uppercase fw-bold">9&#41;.Have
                                    you
                                    received a
                                    formal
                                    warning or
                                    ban from a FiveM Administrator / Support
                                    member?</span>
                                <br>
                                <input type="radio" name="warning" id="warning2">
                                <label for="warning" class="fw-bold text-light">YES</label>
                                <br>
                                <input type="radio" name="warning" id="warning1">
                                <label for="warning" class="fw-bold text-light">NO</label>
                            </div>
                            <hr class="fw-bolder text-light">
                            <span class="h2 text-warning">IC Section</span>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">10&#41;. IC Name</label>
                                <input class="form-control text-capitalize" id="icname" placeholder="name" type="text"
                                    required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">11&#41;. IC Date of
                                    birth</label>
                                <input class="form-control text-uppercase" id="icdob" placeholder="" type="date"
                                    required>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">12&#41;. IC Phone
                                    number</label>
                                <input class="form-control text-capitalize" id="icnum"
                                    placeholder="Enter your phone number" type="text" required>
                            </div>
                            <br>
                            <div class="col-12  mt-5 ">
                                <label class="text-warning text-uppercase fw-bold" for="jt">13&#41;. Why does your
                                    character wish
                                    to join the Medical Department? </label>
                                <textarea class="form-control text-capitalize" id="textarea"
                                    placeholder="Why would your character want to join the Medical Department?"
                                    type="textbox" rows="5" cols="10" required></textarea>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <span class="text-warning text-uppercase fw-bold" for="jt">14&#41;. If so, which
                                    deviation
                                    would
                                    your character like to join? (Keep in mind that there is norestrictions, all the
                                    departments work as one) </span>
                                <br>
                                <br>
                                <input type="radio" name="jttle" id="doc">
                                <label for="doc" class="fw-bold text-light">Doctor Deviation</label>
                                <br>
                                <input type="radio" name="jttle" id="pad">
                                <label for="pad" class="fw-bold text-light">Paramedic Deviation</label>
                            </div>
                            <div class="col-12  mt-5 col-lg-6">
                                <label class="text-warning text-uppercase fw-bold" for="jt">15&#41;. How many hours can
                                    you stay on duty while doing the job? *
                                    Must be able to work for at least 2 hours (Must be able to work at least 2
                                    hours)</label>
                                <input class="form-control text-capitalize" id="ictime"
                                    placeholder="Working Hour > 2 hour" type="text" required>
                            </div>
                            <div class="col-12  mt-5 ">
                                <span class="fw-bold text-uppercase text-warning">16&#41;. Work shift availability
                                    (select available
                                    times)</span>
                                <br>
                                <input type="radio" value="t1" id="t1">
                                <label class="text-light text-uppercase fw-bold" for="t1">Morning 06:00 AM - 14:00
                                    PM</label>
                                <br>
                                <input type="radio" value="t2" id="t2">
                                <label class="text-light text-uppercase fw-bold" for="t2">Day 14:00 PM - 22:00
                                    PM</label>
                                <br>
                                <input type="radio" value="t3" id="t3">
                                <label class="text-light text-uppercase fw-bold" for="t3">Night 22:00 PM - 06:00
                                    PM</label>
                                <br>
                                <input type="radio" value="t4" id="t4">
                                <label class="text-light text-uppercase fw-bold" for="t4">Other</label>
                                <input type="text" class="form-control" id='t5'
                                    placeholder='Enter Your Other Available time'>
                            </div>
                        </div>
                        <button onclick="submit();"
                            class="btn btn-outline-danger m-5 text-light fw-bolder img-thumbnail">Submit</button>
                    </div>
                    <?php require "footer.php"; ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
</script>
<script src="script.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</html>
<?php
}else{
    header("Location: app/index.php");
}
?>