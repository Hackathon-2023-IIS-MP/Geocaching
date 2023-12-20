<?php

include_once __DIR__ . "/config.php";

$smtp = $mysqli->prepare("SELECT * FROM caccie WHERE DataFine IS NULL");
$smtp->execute();

$result = $smtp->get_result();

$gamesData = [];


while($row = $result->fetch_assoc())
{
    $newGame = ["codice"=>$row["CodiceCaccia"], "name"=>$row["Nome"], "maxGiocatori"=>$row["MaxGiocatori"]]; //prendo la partita
    $gamesData[]= $newGame; //la inserisco nell'array associativo
}

header('Content-Type: application/json');
echo json_encode($gamesData);
?>
