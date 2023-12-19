<?php 

session_start();

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>    
    <h1>Welcome <?php echo $_SESSION["user_username"]?></h1>
</body>
</html>