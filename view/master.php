<html>

<head>
  <title>Vue Transitions - Shuffle a Deck of Cards</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
  <!-- <script src="../resources/js/bootstrap.min.js"></script> -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.6/css/all.css'>
  <link rel="stylesheet" href="../resources/styles.css">
  <script src="https://kit.fontawesome.com/870d695b00.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../resources/js/master.js"></script>
</head>

<body>
    <h1 class="title">
      Dungeon & Cthulhu - Master
    </h1>
    
    <br>
    <br>
    <br>
    <form action="../core/uploadSong.php" method="POST" enctype="multipart/form-data">
        <div class="input-group center" style="width: 60%;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="newSong" name="newSong">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            <input type="submit"/>
        </div>
    </form>
    
    <br>
    <div class="form-group center"  style="width: 60%;">
      <label for="volume">Volume</label>
      <input type="range" class="custom-range" id="volume" min="0" max="1" step="0.01"> 
    </div>
    <br>

    <!-- <table class="table table-dark center" id="trackList" style="width: 60%;"> -->
    <table class="table table-striped  center" id="trackList" style="width: 60%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Play</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $index = 0;
    foreach ($filelist as &$track) { 
        $index++;
        if(strpos($track, '(', 0) === false || strpos($track, ')', 0) === false){
          $name = $track;
        }else{
          $lavel = substr($track,strpos($track, '(', 0)+1,strpos($track, ')', 0)-1);
          $code = dechex(crc32("(".$lavel.")"));
          $color = substr($code, 0, 6);
          $text = substr($track,strpos($track, ')', 0)+1,-4);
          $inverseColor = 0xFFFFFF - ((int)('0x1'.$color))  ;
          $name = '<span style="color:#'.$color.';">('.$lavel.') </span>'.'<span style="color:#'.$color.';">'.$text.'</span>';
        }
    ?>
    <tr>
      <td> <?php echo $name; ?></td>
      <td><i class="fas fa-play" id="<?php echo "track".$index; ?>" onclick="changeTrack('<?php echo $track;?>','track<?php echo $index;?>');"></i></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

    
    
<br>
    <div class="form-group center"  style="width: 70%;">
      <div class="text-center">
        <div class="btn-group" data-toggle="buttons">
          <div class="form-check form-check-inline">
            <input class="form-check-input mx-5" type="radio" name="refreshRate" id="refreshRate1" value="1">
            <label class="form-check-label" for="refreshRate1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input mx-5" type="radio" name="refreshRate" id="refreshRate2" value="2">
            <label class="form-check-label" for="refreshRate2">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input mx-5" type="radio" name="refreshRate" id="refreshRate3" value="3">
            <label class="form-check-label" for="refreshRate3">3</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input mx-5" type="radio" name="refreshRate" id="refreshRate4" value="4">
            <label class="form-check-label" for="refreshRate4">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input mx-5" type="radio" name="refreshRate" id="refreshRate5" value="5" checked>
            <label class="form-check-label" for="refreshRate5">5</label>
          </div>
        </div>
      </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
</body>

</html>
