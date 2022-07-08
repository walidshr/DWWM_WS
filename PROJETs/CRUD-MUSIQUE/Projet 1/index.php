<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - GoSNippets</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <link rel="stylesheet" href="index.css">
                                <style>body {
    background: url(../Projet\ 1/francodiff.jpeg);
    background-size: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.navbar {
    position: fixed;
    transition: 1s;
}

.navbar-brand {
    color: #fff;
    font-size: 45px;
    font-family: Germania;
    cursor: pointer;
}

.icon-bar {
    background-color: #000;

}

.nav {
    font-family: Lithos Pro;
    color: #fff;
    padding: 10px 20px;
}

.nav li {
    padding: 10px;
    cursor: pointer;
    font-size: 16px;
}

.nav li:after {
    content: '';
    display: block;
    border-bottom: 2px solid #38fd07;
    transform: scaleX(0);
    transition: .2s ease-in-out;
}

.nav li:hover:after {
    transform: scaleX(1);
}

.para {
    min-height: 500px;
}

.para h3 {
    text-align: center;
    margin-top: 15%;
    color: #fff;
    font-family: nyala;
    font-size: 44px;
}

body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);

}

body::-webkit-scrollbar {
    width: 14px;
}

body::-webkit-scrollbar-thumb {

    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .5);
    background: #501e27;
}

@media(max-width: 720px) {
    body {
        background-size: 100% 100%;
    }

    .navbar-collapse {
        background: #501e27;
    }

    .para {
        min-height: 800px;
    }
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="navbar navbar-fixed-top container-fluid" id="navbar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">Projet</a>
    </div>
    <div class="collapse navbar-right navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <form action="index.php" method="POST">
        <p><input class="btn1" type="submit" name="btn1" value="Connexion" onclick="return action='connexion.php'"/> <input class="btn1" type="submit" name="btn1" value="Inscription" onclick="return action='inscription.php'"/></p>
        </form>
        </ul>
    </div>
</div>
<div class="para">
    <h3>Scroll down to see the navbar effect..</h3>
</div>
                            <script type='text/javascript'>window.onscroll = function () {scrollFunction();};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

document.getElementById("navbar").style.background = "#8B5C20";
} else {

document.getElementById("navbar").style.background = "none";
}
}</script>
                            </body>
                        </html>
<?php

?>