<?php

session_start();

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
        <a class="btn btn-primary btn-lg mt-3" href="signin.php" role="button" style="background-color: #081e58; border: none;">
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
