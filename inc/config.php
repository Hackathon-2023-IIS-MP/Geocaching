<?php

// Configurazione del database
define('DB_HOST', 'localhost');
define('DB_NAME', 'geocaching');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

// Connessione al database mediante MySQLi
try {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Verifica la connessione
    if ($mysqli->connect_error) {
        throw new Exception("Connessione al database fallita: " . $mysqli->connect_error);
    }

    // Imposta il set di caratteri a utf8 (se necessario)
    if (!$mysqli->set_charset("utf8")) {
        throw new Exception("Errore durante l'impostazione del set di caratteri utf8: " . $mysqli->error);
    }
} catch (Exception $e) {
    die("Errore: " . $e->getMessage());
}

?>
