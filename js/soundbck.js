

function xsuplay(){

  var xsuawaplay = $("#xsuawaplay").get(0);

  if (!xsuawaplay.paused){
    xsuawaplay.pause();
    xsuawaplay.currentTime = 0;
  }else{

    xsuawaplay.play();

  }


}
