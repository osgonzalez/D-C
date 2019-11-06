<?php
$refreshRate = $_POST['refreshRate'];
$file = "../resources/actualRefreshRate";
file_put_contents($file, $refreshRate);
?>