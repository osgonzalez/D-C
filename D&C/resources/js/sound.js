    $(function() {
    var rootPath = "../resources/music/";
    var lastTrack = $("source").attr("src");
    var lastVolume = 0.5;
    var lastRefreshRate = 5;

    function checkTrack(){
        $.ajax({
                url:   '../core/checkTrack.php',
                type:  'post',
                beforeSend: function () {
                    console.log("Waiting...");
                },
                success:  function (response) { 
                    console.log("donne...");
                    var newTrack = rootPath + response.actualTrack;
                    if(newTrack!= lastTrack){
                        console.log("Track Change!");
                        console.log("lastTrack => " + lastTrack);
                        console.log("newTrack => " + newTrack);
                        lastTrack = newTrack;
                        $("source").attr("src",newTrack);
                        var audio = $("audio")[0];
                        audio.load(); //call this to just preload the audio without playing
                        audio.play(); //call this to play the song right away
                    }
                    console.log(response.actualTrack);
                    var newVolume = response.actualVolume;
                    if(newVolume != lastVolume){
                        console.log("Volume Change!");
                        console.log(lastVolume + " => " + newVolume);
                        lastVolume = newVolume;
                        $("audio").prop("volume", newVolume);
                    }
                    var newRefreshRate = response.actualRefreshRate;
                    if(newRefreshRate != lastRefreshRate){
                        console.log("RefreshRate Change!");
                        console.log(lastRefreshRate + " => " + newRefreshRate);
                        lastRefreshRate = newRefreshRate;
                    }
                }
        });
    }

    function startDelay(){
        setTimeout(function() {
            checkTrack();
            startDelay();
        }, lastRefreshRate * 1000);
    }

    startDelay();
    
});