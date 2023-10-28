function home(){
    window.location="index.php";
}

function application(){
    window.location="application.php";
}

function player(){
    window.location="playerDashboard.php";
}

function about(){
    window.location = "aboutUs.php" ;
}

var page = document.getElementById("new");
gsap.fromTo(
    ".loading-page",
    { opacity: 1 ,
    },

    {
        opacity: 0,
        display: "none",
        duration: 0.5,
        delay: 2.5,
    }
);

gsap.fromTo(
    ".logo-name",
    {
        y: 50,
        opacity: 0,
    },
    {
        y: 0,
        opacity: 1,
        duration: 2,
        delay: 0.5,
    }
);


function submit(){
    var jt = document.getElementById('jt').value;
    var name = document.getElementById('name').value;
    var dob = document.getElementById('dob').value;
    var wpn = document.getElementById('wpn').value;
    var country = document.getElementById('country').value;
    var stlink = document.getElementById('stlink').value;
    var warning = document.getElementById('warning').value;
    var war1 = document.getElementById('warning1').checked; //warn havent
    var war2 = document.getElementById('warning2').cheched; //warn have
    if(war1){
        var warning1 = "Yes";
    }
    if(war2){
        var warning1 = "No";
    }
    var icname = document.getElementById('icname').value;
    var icdob = document.getElementById('icdob').value;
    var icnum = document.getElementById('icnum').value;
    var textarea = document.getElementById('textarea').value;
    var doct = document.getElementById('doc').checked;
    var pad = document.getElementById('pad').checked;
    if(doct){
        var doc = "Yes";
    }else{
        var doc = "No";
    }
    var ictime = document.getElementById('ictime').value;

    // Get a reference to the radio buttons by their name
    var checkbox1 = document.getElementById("t1").checked;
    var checkbox2 = document.getElementById("t2").checked;
    var checkbox3 = document.getElementById("t3").checked;
    var checkbox4 = document.getElementById("t4").checked;
    var inputbox = document.getElementById("t5").checked;

    if(checkbox1){
        var t1 = "Yes";  //MORNING 06:00 AM - 14:00 PM
    }
    if(checkbox2){
        var t2 = "Yes"; // DAY 14:00 PM - 22:00 PM
    }
    if(checkbox3){
        var t3 = "Yes"; // NIGHT 22:00 PM - 06:00 PM
    }
    if(checkbox4){
        var t4 = "Yes"; // OTHER
    }
}