<?php
session_start();

/* includo l'header della pagina */
include __DIR__ . "/tmpl/header.html.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Your custom CSS styles can be added here -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .about-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .about-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container about-container">
        <div class="about-header">
            <h1>About Us</h1>
            <p>Welcome to Geocaching, where adventure knows no bounds!</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>We strive to create an online game where creativity merges with excitement, players become creators, and social connections translate into limitless adventures, offering each participant the key to unlock a world of unique possibilities and rewards.</p>
            </div>
            <div class="col-md-6">
                <h2>Who We Are</h2>
                <p>We are a passionate team dedicated to providing a platform that brings joy, challenge, and a sense of community through the thrilling experience of geocaching. Join us on this journey of exploration and discovery!</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Bootstrap 5 uses native JavaScript for components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
// Include the footer
include __DIR__ . "/tmpl/footer.html.php";
?>