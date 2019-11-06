<?php
$actualTrack = file_get_contents("../resources/actualTrack");
$actualVolume = file_get_contents("../resources/actualVolume");
$actualRefreshRate = file_get_contents("../resources/actualRefreshRate");

header('Content-Type: application/json');
echo json_encode([
        "actualTrack" => $actualTrack, 
        "actualVolume" => $actualVolume,
        "actualRefreshRate" => $actualRefreshRate
    ]);
?>