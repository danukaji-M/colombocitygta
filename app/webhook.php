<?php
session_start();
$_SESSION['userData'];
$_SESSION['logged_in'];



// Webhook URL
$webhook_url = 'https://discord.com/api/webhooks/1161900834624376983/E3HHEu7zg7I-FK6IcBtOHB_h2XdakKNSkw4TFdo54ny9JyB0vnAnKAapIq8nhVTZKGJs';

// Data to send in the request
$name = $_SESSION['userData']['name'];
$id = $_SESSION['userData']['discord_id'];
// Data to send in the request

$message = "Message content: Hello, Discord! This is a webhook message.\n";
$message .= "**Name:** ". $name ."\n";
$message .= "**ID:** ". $id;
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