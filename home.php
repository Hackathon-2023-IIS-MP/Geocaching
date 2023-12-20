<?php
session_start();

if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_username"])) {
    RedirectToSignin();
}

function RedirectToSignin()
{
    header("Location: signin.php");
    exit();
}

include __DIR__ . "/tmpl/header.html.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Add jQuery for Ajax -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="js/getGamesOnline.js"></script>

    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Welcome <?php echo $_SESSION["user_username"]?></h1>
                <!-- Bootstrap-styled table for displaying online games -->
                <table class="table table-bordered" id="gamesTable">
                    <thead>
                        <tr>
                            <th scope="col">Game ID</th>
                            <th scope="col">Game Name</th>
                            <th scope="col">Players</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamically populate this section with online game data -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <!-- Buttons to create and join a game -->
                <button class="btn btn-primary btn-block mb-2">Create a Game</button>
                <button class="btn btn-success btn-block">Join a Game</button>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include __DIR__ . "/tmpl/footer.html.php";
?>
