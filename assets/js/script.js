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