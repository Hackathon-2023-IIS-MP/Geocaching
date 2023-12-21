<?php

include_once __DIR__ . "/config.php";

// Check if the 'type' parameter is set in the URL
if (isset($_GET["type"])) {
    // Get the 'type' parameter value
    $type = $_GET["type"];

    // Check if 'type' is a string and not empty
    if (is_string($type) && !empty($type)) {
        // Check if 'type' is "all"
        if ($type === "all") {
            // 'type' is "all", adjust the query accordingly
            $smtp = $mysqli->prepare("SELECT * FROM caccie WHERE DataFine IS NULL");
        } else {
            // 'type' is a string other than "all", proceed with the original query
            $smtp = $mysqli->prepare("SELECT * FROM caccie WHERE DataFine IS NULL AND Tipologia = ?");
            $smtp->bind_param("s", $type);
        }

        $smtp->execute();
        $result = $smtp->get_result();

        $gamesData = [];

        while ($row = $result->fetch_assoc()) {
            $newGame = [
                "codice" => $row["CodiceCaccia"],
                "name" => $row["Nome"],
                "maxGiocatori" => $row["MaxGiocatori"]
            ];
            $gamesData[] = $newGame;
        }

        header('Content-Type: application/json');
        echo json_encode($gamesData);
    } else {
        // 'type' is not a valid string, handle the error accordingly
        echo "Invalid 'type' parameter.";
    }
} else {
    // 'type' parameter is not set, handle the error accordingly
    echo "'type' parameter is missing.";
}
?>
