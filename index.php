<?php

session_start();
// Verifica se è presente il parametro username e deve avere il cookie loggato

// Verifica se è presente il parametro username
if (isset($_GET["username"])) {

    //prendo l'username dall'url
    $username = $_GET["username"];

    //se la sessione è settata
    if (isset($_SESSION["user_id"]) && isset($_SESSION["user_username"])) {

        if($username == $_SESSION["user_username"])
        {
            if (isset($_COOKIE["loggedin"]) && $_COOKIE["loggedin"] === $username) {
                $newuser = false;
            } else {
                //setto i cookie
                setcookie('loggedin', $username, time() + 3600);
                $newuser = true;
            }

            //prendo l'id per mostrarlo
            $user_id = $_SESSION["user_id"];
        }
        else
        {
            RedirectToSignin();
        }
        

        
    } else {
        RedirectToSignin();
    }
} else {
    RedirectToSignin();
}

//funzione che riporta al signin
function RedirectToSignin()
{
    header("Location: signin.php");
    exit();
}


/* includo l'header della pagina */
include __DIR__ . "/tmpl/header.html.php";
?>

<!-- Content specific to the home page -->
<div class="jumbotron mt-4">
    <h1 class="display-4">Welcome to Geocaching <?php echo $_SESSION["user_username"]?> !</h1>
    <p class="lead">Discover hidden treasures around the world with Geocaching.</p>
    <hr class="my-4">
    <p>Explore and share your adventures.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
</div>


</div><!-- Chiusura container iniziato in header.html.php -->



<?php
// FOOTER
include __DIR__ . "/tmpl/footer.html.php";
?>


<!-- Content container ends -->
</div>

