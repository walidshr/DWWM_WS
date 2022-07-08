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
    background-image: url(img//francodiff.jpeg);
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
    margin: auto;
    margin-bottom: 50px;
    min-height: 400px;
    background-image: url(img//chanteurs.png); opacity: 0.2;
    background-size: 100%;
    padding-bottom: 0px;
    margin-bottom: 0px;
    border-bottom-style: solid;
    border-bottom-width: 3px;
    border-bottom-color: #8a5c20; 
}

.nouvelarticle{
    border: 2px, #38fd07;
    padding-top: 0px;
    margin-top: 0px;
    /* border-bottom-style: solid;
    border-bottom-width: 3px;
    border-bottom-color: grey;  */
}

h3{
    color: white;
    text-align: center;
    font-size: 50px;
    font-weight: bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    -webkit-text-stroke: 2px #8a5c20;
    padding-bottom: 50px;
}

h4{
    color: #8a5c20;
    text-align: center;
    font-size: 50px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    -webkit-text-stroke: 1px white;
}


.btn1{
    color: white;
    text-align: center;
    font-size: 50px;
}

.dsk2{
    text-align: center;
    color: white;
    font-weight: bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 35px;
    -webkit-text-stroke: 2px #8a5c20;
}

.bordurebas{
    border-top-style: solid;
    border-top-width: 3px;
    border-top-color: grey; 
    opacity: 0.2;
    border-color: transparent;
    background-color: #8a5c20;
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
    <ul class="nav navbar-nav" style="font-size: 25px ;">
           <?php 
          echo "Nous vous souhaitons la bienvenue !" ?>
        </ul>
    </div>
</div>
<div class="para">
</div>

<div class="nouvelarticle">
<h3>Ajouter un nouvel artiste </h3>
<div class="dsk2"> 
    <form action="artiste.php" method="POST">
        <p class="p">Nom : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nom_artiste" /> <br> <br>
        Prénom : <input type="text" name="prenom_artiste" /> <br> <br>
        <input class="btn1" type="submit" name="btn1" value="OK"/></p>
    </form>
</div>
</div>

<div class="bordurebas"></div>

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
require 'database.php';

if (!empty($_POST['nom_artiste']) && !empty($_POST['prenom_artiste'])) {
    $nom = $_POST['nom_artiste'];
    $prenom = $_POST['prenom_artiste'];
 

    $req = $pdo->prepare("INSERT INTO artistes(nom_artiste,prenom_artiste) VALUES (:nom_artiste, :prenom_artiste)");
    $req->bindValue('nom_artiste', $nom);
    $req->bindValue('prenom_artiste', $prenom);
    $res = $req->execute();

    if ($res) {
    echo " <h4>L'artiste a bien été ajouté !</h4>";
    exit(); 
     }
}
