<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1158795220868149269&redirect_uri=http%3A%2F%2Flocalhost%3A8080%2F%25E0%25B6%259A%25E0%25B7%259C%25E0%25B7%2585%25E0%25B6%25B9gta%2Fapp%2Fprocess-outh.php&response_type=code&scope=identify%20guilds";
header("Location: $discord_url");
exit();

?>