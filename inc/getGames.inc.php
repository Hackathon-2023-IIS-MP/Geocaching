<?php
// getGames.php
// Simulate fetching online games data (replace this with your actual logic)
$gamesData = [
    ["id" => 1, "name" => "Game 1", "players" => "3/4"],
    ["id" => 2, "name" => "Game 2", "players" => "2/4"],
    // Add more game data as needed
];

header('Content-Type: application/json');
echo json_encode($gamesData);
?>
