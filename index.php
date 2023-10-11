<?php 
session_start();
require "../database/connection.php";


$_SESSION['userData'];
$_SESSION['logged_in'];

$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\assets\css\style.css">
</head>
<body>
    
<script src="..\assets\js\script.js" ></script>
</body>
</html>