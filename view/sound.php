<html>

<head>
  <title>Vue Transitions - Shuffle a Deck of Cards</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.6/css/all.css'>
  <link rel="stylesheet" href="../resources/styles.css">
  <script src="https://kit.fontawesome.com/870d695b00.js"></script>
  <!-- <script src="../resources/js/bootstrap.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../resources/js/sound.js"></script>
</head>

<body>
    <h1 class="title">
      Dungeon & Cthulhu - Music
    </h1>
    
    <?php 
        
        $newTrack = file_get_contents("../resources/actualTrack");
    ?> 

    <div class="center">
        <audio id="player" controls autoplay loop>
            <source src="../resources/music/<?php echo $newTrack; ?>" type="audio/mp3" >
        </audio>
    </div>
    

  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
</body>

</html>
