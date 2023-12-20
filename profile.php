<?php
session_start();

// Verifica se è presente il parametro username
if (isset($_GET["username"])) {

    //prendo l'username dall'url
    $username = $_GET["username"];

    //se la sessione è settata
    if (isset($_SESSION["user_id"]) && isset($_SESSION["user_username"])) {

        if ($username == $_SESSION["user_username"]) {
            if (isset($_COOKIE["loggedin"]) && $_COOKIE["loggedin"] === $username) {
                $newuser = false;
            } else {
                //setto i cookie
                setcookie('loggedin', $username, time() + 3600);
                $newuser = true;
            }

            //prendo l'id per mostrarlo
            $user_id = $_SESSION["user_id"];


            GetData($user_id);
            
        } else {
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

function GetData()
{
    $query = "SELECT * FROM giocatori WHERE ID = ?";


}

/* includo l'header della pagina */
include __DIR__ . "/tmpl/header.html.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $username ?>'s Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container profile-container">
        <div class="profile-header">
            <h1>Hello, <?php echo $username ?>!</h1>
        </div>
        <div class="row">
            <h2>Profile Information</h2>
            <div class="col-md-6">

                <ul>
                    <li><strong>User ID:</strong> <?php echo $user_id ?></li>
                    <li><strong>Email:</strong> example@email.com</li>
                </ul>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Include the footer
include __DIR__ . "/tmpl/footer.html.php";
?>
