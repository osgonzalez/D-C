<?php


$target_dir = "../resources/music/";
$target_file = $target_dir . basename($_FILES["newSong"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["newSong"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["newSong"]["name"]). " has been uploaded.";
    header("Location: ./master.php");
    die();
} else {
    echo "<br><br>Sorry, there was an error uploading your file.<br>";
    echo "Change Xammp/php/php.ini<br>";
    echo "post_max_size=60M<br>";
    echo "upload_max_filesize=60M<br>";
}
?>
