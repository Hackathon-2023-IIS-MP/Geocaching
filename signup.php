<?php
include_once __DIR__ . "/inc/register.inc.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Sign Up</title>
    <style>
        #container_signup {
            margin-top: 50px; /* Adjust the margin as needed */
        }

        #error-message {
            color: red;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div id="container_signup" class="text-center p-4 border rounded">
        <h1 class="mb-4">Sign Up</h1>

        <!-- Show error message if present -->
        <?php if (!empty($errore)) : ?>
            <p id="error-message">
                <?php echo $errore; ?>
            </p>
        <?php endif; ?>

        <!-- FORM REGISTRAZIONE -->
        <form action="signup.php" method="POST" onsubmit="return validateForm()" class="mb-4">
            <div class="mb-3">
                <input id="name" type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="mb-3">
                <input id="surname" type="text" name="surname" class="form-control" placeholder="Cognome">
            </div>

            <div class="mb-3">
                <input id="email" type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="mb-3">
                <input id="username" type="text" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="mb-3">
                <input id="password" type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="mb-3">
                <label class="form-label">Hai già un account? <a href="signin.php">Sign in</a></label>
            </div>

            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
    </div>

    <script>
        /* funzione che viene chiamata quando premo il button submit, e controlla tutti i vari campi */
        function validateForm() {
            var name = document.getElementById("name").value;
            var surname = document.getElementById("surname").value;
            var email = document.getElementById("email").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (name.trim() === "") {
                alert("Inserisci il tuo nome.");
                return false;
            }

            if (surname.trim() === "") {
                alert("Inserisci il tuo cognome.");
                return false;
            }

            if (email.trim() === "") {
                alert("Inserisci la tua email");
                return false;
            }

            if (username.trim() === "") {
                alert("Inserisci il tuo username.");
                return false;
            }

            if (password.trim() === "") {
                alert("Inserisci la tua password");
                return false;
            }

            //altrimenti ritorna vero
            return true;
        }
    </script>

    <!-- Bootstrap JS (Bootstrap 5 uses native JavaScript for components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
