<?php
$volume = $_POST['newVolume'];
$file = "../resources/actualVolume";
file_put_contents($file, $volume);
?>