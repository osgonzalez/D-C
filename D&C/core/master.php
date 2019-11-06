<?php
$filelist = array();
if ($handle = opendir("../resources/music/")) {
    while ($entry = readdir($handle)) {
        if (!is_dir($entry)) {
            $filelist[] = $entry;
        }
    }
    closedir($handle);
}

include_once "../view/master.php";
?>