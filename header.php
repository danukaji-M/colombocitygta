<?php

/* ---------------- Fivem Server Connection-------------------- */
/* You must update your server details in here */

$server_settings['title'] = "Default"; 
$server_settings['ip'] = "play.colambanagarerp.xyz"; 
$server_settings['port'] = "30120"; /*  Default Port is "30120" is your's one different ? update it */
$server_settings['max_slots'] = 64;

/* ------------------------------------------------------------ */

$content = json_decode(file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/info.json"), true);
if($content):
    $fivem_players = file_get_contents("http://".$server_settings['ip'].":".$server_settings['port']."/players.json");
    $content = json_decode($fivem_players, true);
    $player_count = count($content);
    $SERVER_STATUS = "<font style='color: green;'>Online</font>";  

    else:
        $SERVER_STATUS = "<font style='color: red;'>Server Offline</font>";
        $player_count = "0";
endif;



?>

<body>
    <div class="col-12 bg-light ">
        <div class="row">
            <div class="col-6 mt-3 mb-3">
                <div class="row">
                    <div class="col-6 col-lg-1">
                        <div class="imgnav">
                            <img src="resources/logo.png"
                                style="height: 60px; width: auto; margin-left:-15px; margin-bottom:-10px; position:absolute; display:flex;"
                                alt="">
                        </div>
                    </div>
                    <div class="col-6 mt-3 d-none mx-3 d-lg-block col-lg-6">
                        <span class=" m-4 text-capitalize text-muted ">Server Status :</span>
                        <span class="text-success fw-bold"><?php echo "$SERVER_STATUS"; ?></span>
                        <br>
                        <span class="text-muted m-4">Players Online :</span>
                        <span> <span
                                class=" fw-bold"><?php echo "$player_count / $server_settings[max_slots]"; ?></span>
                            <br>
                            <span></span>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <nav>
                        <ul class=" text-uppercase nav ">
                            <li class=" m-5 nav-item">
                                <a class="text-decoration-none fw-bolder  navhover" href="/index.php">Home</a>
                            </li>
                            <li class=" m-5 nav-item">
                                <a class="text-decoration-none fw-bolder  navhover" href="#">Rules</a>
                            </li>
                            <li class="m-5 nav-item">
                                <a class="text-decoration-none fw-bolder  navhover" href="https://discord.gg/cnrplk"
                                    target="_blank">Discord</a>
                            </li>
                            <li class="m-5 nav-item">
                                <a class="text-decoration-none fw-bolder  navhover" href="jobs.php">Jobs</a>
                            </li>
                            <li class="m-5 nav-item">
                                <a class="text-decoration-none fw-bolder  navhover" href="">
                                    <?php
                                if(isset($_SESSION['userData'])){
                                    echo $_SESSION['userData']['name'] ."</a>";
                                }else{
                                    echo "<a class='text-decoration-none fw-bolder  navhover' href=".'./app/index.php'." >Login here</a>";
                                }
                                ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>