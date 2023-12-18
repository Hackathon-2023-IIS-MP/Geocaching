<?php

session_start();

// Check if the session is set
if (isset($_SESSION["user_id"]) && isset($_SESSION["user_username"])) {

    // Check if the user is a new user
    if (isset($_COOKIE["loggedin"]) && $_COOKIE["loggedin"] === $_SESSION["user_username"]) {
        $newuser = false;
    } else {
        // Set cookies for new users
        setcookie('loggedin', $_SESSION["user_username"], time() + 3600);
        $newuser = true;
    }

    // Get user id to display
    $user_id = $_SESSION["user_id"];
} else {
    // Redirect to signin if the session is not set
    RedirectToSignin();
}

// Redirect to signin function
function RedirectToSignin()
{
    header("Location: signin.php");
    exit();
}

/* Include the header of the page */
include __DIR__ . "/tmpl/header.html.php";
?>

<!-- Content specific to the home page -->
<div class="container text-center mt-4">
    <div class="jumbotron">
        <!-- Logo -->
        <img src="./img/logo.ico" alt="Logo" class="logo">

        <h1 class="display-4">Welcome to Geocaching!</h1>
        <p class="lead">Discover hidden treasures around the world with Geocaching.</p>
        <hr class="my-4">
        <p>Explore and share your adventures.</p>

        <!-- Button with Custom Color, Border Radius, and Icon -->
        <a class="btn btn-primary btn-lg mt-3" href="#" role="button" style="background-color: #081e58; border: none;">
            <i class="fas fa-play"></i> Get Started
        </a>
    </div>
</div>

<?php
// FOOTER
include __DIR__ . "/tmpl/footer.html.php";
?>

<!-- Content container ends -->
</div>
