<?php
$track = $_POST['newTrack'];
$file = "../resources/actualTrack";
file_put_contents($file, $track);
?>