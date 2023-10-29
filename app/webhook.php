<?php
session_start();
$_SESSION['userData'];
$_SESSION['logged_in'];

$jt = $_POST['jt'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$wpn = $_POST['wpn'];
$country = $_POST['country'];
$stlink = $_POST['stlink'];
$warning = $_POST['warning'];
$warning1 = $_POST['warning1'];
$icname = $_POST['icname'];
$icdob = $_POST['icdob'];
$icnum = $_POST['icnum'];
$text = $_POST['textarea'];
$doc = $_POST['doc'];
$ictime = $_POST['ictime'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$input = $_POST['inputbox'];
if($doc == "Yes"){
    $jobtitle = "Doctor Deviation";
}else{
    $jobtitle = "Paramedic Deviation";
}

if($t1 == "Yes"){
    $jobtitle1 = "MORNING 06:00 AM - 14:00 PM";
}
if($t2 == "Yes"){
    $jobtitle2 = " DAY 14:00 PM - 22:00 PM ";
}
if($t3 == "Yes"){
    $jobtitle3 = "NIGHT 22:00 PM - 06:00 PM";
}
if($t4 == "YES"){
    $jobtitle4 = $input;
}

// Webhook URL
$webhook_url = 'https://discord.com/api/webhooks/1161900834624376983/E3HHEu7zg7I-FK6IcBtOHB_h2XdakKNSkw4TFdo54ny9JyB0vnAnKAapIq8nhVTZKGJs';

// Data to send in the request
$name = $_SESSION['userData']['name'];
$id = $_SESSION['userData']['discord_id'];
// Data to send in the request

$message =  " ```css
[Player Job Application  ".$name ." ". $id."]
``` \n \n"  ;
$message .= "```Name: ". $name ."\n \n";
$message .= "ID: ". $id ."\n \n";
$message .= "Job_Title : ". $jt."\n \n";
$message .= "DATE_OF_BIRTH :  ". $dob."\n \n";
$message .= "WHATSAPP_NUMBER : ". $wpn."\n \n";
$message .= "IC_name :  ". $icname."\n \n";
$message .= "IC_Date_Of_Birth :  ". $icdob."\n \n";
$message .= "IC_Phone_Number :  ". $icnum."\n \n";
$message .= "Player_Explanation_Why_need_This_job : ". $text."\n \n";
$message .= "JOB_Vacancy :  ".$jobtitle." \n \n";
$message .= "PLAY TIME1 :". $jobtitle1 ."\n \n";
$message .= "PLAY TIME2 :". $jobtitle2 ."\n \n";
$message .= "PLAY TIME3 :". $jobtitle3 ."\n \n";
$message .= "PLAY TIME4 :". $jobtitle4 ."\n \n ```";

$data = array(
    'content' => $message,
);


// Convert data to JSON format
$json_data = json_encode($data);


// Convert data to JSON format
$json_data = json_encode($data);

// Initialize cURL session
$ch = curl_init($webhook_url);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Execute the cURL session and capture the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Process the webhook response (if needed)
if ($response) {
    // Handle the response here
    echo 'Webhook response: ' . $response;
    header('Location: ../index.php?msg=Success Full Application Fill');
        exit;
}