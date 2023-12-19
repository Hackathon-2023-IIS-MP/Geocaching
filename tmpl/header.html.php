<?php /* session_start(); */ ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geocaching</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap JS (Bootstrap 5 uses native JavaScript for components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border">
        <div class="container"> <!-- Wrap content in a container -->
            <a class="navbar-brand" href="#">Geocaching</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <!-- logica navbar in base a se sei loggato oppure no -->
                    <?php if (isset($_SESSION["user_id"])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="profileLink">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="logOutLink">Log out</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.php" id="signInLink">Sign in</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content container starts with padding -->
    <div class="container">


        <script>
            document.getElementById('profileLink').addEventListener('click', function() {
                // Redirect to profile.php?username=name
                window.location.href = 'profile.php?username=<?php echo isset($_SESSION["user_username"]) ? $_SESSION["user_username"] : ""; ?>';
            });

            document.getElementById('logOutLink').addEventListener('click', function() {
                // Redirect to profile.php?username=name
                window.location.href = 'inc/logout.inc.php';
            });
        </script>

</body>

</html>