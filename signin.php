<?php
include __DIR__ . "/class/ClsUser.php";
include_once __DIR__ . "/inc/config.php";

session_start();

// Verifica se il form è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendo i dati dal form
    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $hashedPassword = md5($password);

        $query = $mysqli->prepare("SELECT ID FROM giocatori WHERE Nikname = ? AND password_hash = ? ");
        $query->bind_param("ss", $username, $hashedPassword);

        // ESEGUO 
        $query->execute();

        $result = $query->get_result();

        // controllo se c'è almeno una riga
        if ($result->num_rows > 0) {
            // prendo la prima riga
            $row = $result->fetch_assoc();

            $ID = $row["ID"];
            
            if(!isset($_SESSION["user_id"]))
            {
                //setto id e username utente su sessione
                $_SESSION["user_id"] = $ID;
                $_SESSION["user_username"] = $username;
            }
            

            setcookie('loggedin', $username, time() + 3600);

            // reindirizzo alla pagina con l'username che ha inserito
            header("Location: index.php?username=" . urlencode($username));
            exit();

        } else {
            $errore =  "Credenziali errate.";
        }        
    } else {
        $errore = "Parametri mancanti.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Sign In</title>
    <style>
        #container_signin {
            margin-top: 50px; /* Adjust the margin as needed */
        }

        #error-message {
            color: red;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div id="container_signin" class="text-center p-4 border rounded">
        <h1 class="mb-4">Sign In</h1>

        <!-- Show error message if present -->
        <?php if (isset($errore)) : ?>
            <p id="error-message">
                <?php echo $errore; ?>
            </p>
        <?php endif; ?>

        <!-- FORM LOGIN -->
        <form action="signin.php" method="POST" onsubmit="return validateForm()" class="mb-4">
            <div class="mb-3">
                <input id="username" type="text" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="mb-3">
                <input id="password" type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">New? <a href="signup.php">Sign up</a></label>
            </div>

            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username.trim() === "") {
                alert("Please enter a username.");
                return false;
            }

            if (password.trim() === "") {
                alert("Please enter a password.");
                return false;
            }

            return true;
        }
    </script>

    <!-- Bootstrap JS (Bootstrap 5 uses native JavaScript for components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>