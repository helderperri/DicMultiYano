//var element = $("td a").first().attr('id')


var word_id = document.getElementById("word_id").textContent;
//var word_adj = word_id-3
//var scroll = document.getElementsByClassName("pre-scrollable")
var word_sel = document.getElementById(word_id);
word_sel.scrollIntoViewIfNeeded();
//element.scrollIntoView();
//word_sel.scrollIntoView();

// Sanöma
var xsuawamp3file = $("#xsuawa").attr("audio");
var xsuawaoggfile = xsuawamp3file.split(".")[0]+".ogg";
var xsuawawavfile = xsuawamp3file.split(".")[0]+".wav";


$("#xsuawamp3").attr("src", xsuawamp3file);
$("#xsuawaogg").attr("src", xsuawaoggfile);
$("#xsuawawav").attr("src", xsuawawavfile);

var xsuawaplay = $("#xsuawaplay").get(0);

// Ericó
var shbercmp3file = $("#shberc").attr("audio");
var shbercoggfile = shbercmp3file.split(".")[0]+".ogg";
var shbercwavfile = shbercmp3file.split(".")[0]+".wav";

$("#shbercmp3").attr("src", shbercmp3file);
$("#shbercogg").attr("src", shbercoggfile);
$("#shbercwav").attr("src", shbercwavfile);

var shbercplay = $("#shbercplay").get(0);


//Baixo Mucajaí

var shbbxmmp3file = $("#shbbxm").attr("audio");
var shbbxmoggfile = shbbxmmp3file.split(".")[0]+".ogg";
var shbbxmwavfile = shbbxmmp3file.split(".")[0]+".wav";

$("#shbbxmmp3").attr("src", shbbxmmp3file);
$("#shbbxmogg").attr("src", shbbxmoggfile);
$("#shbbxmwav").attr("src", shbbxmwavfile);

var shbbxmplay = $("#shbbxmplay").get(0);



//Yãroamë


var yropcump3file = $("#yropcu").attr("audio");
var yropcuoggfile = yropcump3file.split(".")[0]+".ogg";
var yropcuwavfile = yropcump3file.split(".")[0]+".wav";

$("#yropcump3").attr("src", yropcump3file);
$("#yropcuogg").attr("src", yropcuoggfile);
$("#yropcuwav").attr("src", yropcuwavfile);

var yropcuplay = $("#yropcuplay").get(0);


//Yanomamɨ


var guuraimp3file = $("#guurai").attr("audio");
var guuraioggfile = guuraimp3file.split(".")[0]+".ogg";
var guuraiwavfile = guuraimp3file.split(".")[0]+".wav";


$("#guuraimp3").attr("src", guuraimp3file);
$("#guuraiogg").attr("src", guuraioggfile);
$("#guuraiwav").attr("src", guuraiwavfile);

var guuraiplay = $("#guuraiplay").get(0);


//Yanomami das Serras (surucucus)

var wcasccmp3file = $("#wcascc").attr("audio");
var wcasccoggfile = wcasccmp3file.split(".")[0]+".ogg";
var wcasccwavfile = wcasccmp3file.split(".")[0]+".wav";


$("#wcasccmp3").attr("src", wcasccmp3file);
$("#wcasccogg").attr("src", wcasccoggfile);
$("#wcasccwav").attr("src", wcasccwavfile);

var wcasccplay = $("#wcasccplay").get(0);



function pauseAll(){

if(wcasccplay.paused != true){
  wcasccplay.pause();
  wcasccplay.currentTime = 0;
}else if (guuraiplay.paused != true) {
  guuraiplay.pause();
  guuraiplay.currentTime = 0;
}else if (xsuawaplay.paused != true) {
  xsuawaplay.pause();
  xsuawaplay.currentTime = 0;

}else if (shbercplay.paused != true) {
  shbercplay.pause();
  shbercplay.currentTime = 0;

}else if (shbbxmplay.paused != true) {
  shbbxmplay.pause();
  shbbxmplay.currentTime = 0;

}else if (yropcuplay.paused != true) {
  yropcuplay.pause();
  yropcuplay.currentTime = 0;

}

}





if (xsuawamp3file.length > 10){
    $("#xsuawaimg").removeAttr('hidden');
  }

$("#xsuawa").click(function(){
  if(xsuawaplay.paused != true){


    xsuawaplay.pause();
    xsuawaplay.currentTime = 0;

  }else{
    pauseAll();
    xsuawaplay.play();

  }

})



if (shbercmp3file.length > 10){
    $("#shbercimg").removeAttr('hidden');
  }


$("#shberc").click(function(){

  if(shbercplay.paused != true){

    shbercplay.pause();
    shbercplay.currentTime = 0;

  }else{
    pauseAll();
    shbercplay.play();

  }

})



if (shbbxmmp3file.length > 10){
    $("#shbbxmimg").removeAttr('hidden');
  }


$("#shbbxm").click(function(){


  if(shbbxmplay.paused != true){

    shbbxmplay.pause();
    shbbxmplay.currentTime = 0;

  }else{
    pauseAll();
    shbbxmplay.play();

  }

})


if (yropcump3file.length > 10){
    $("#yropcuimg").removeAttr('hidden');
  }


$("#yropcu").click(function(){


  if(yropcuplay.paused != true){

    yropcuplay.pause();
    yropcuplay.currentTime = 0;

  }else{
    pauseAll();
    yropcuplay.play();

  }

})



if (guuraimp3file.length > 10){
    $("#guuraiimg").removeAttr('hidden');
  }

$("#guurai").click(function(){
  if(guuraiplay.paused != true){


    guuraiplay.pause();
    guuraiplay.currentTime = 0;

  }else{
    pauseAll();
    guuraiplay.play();

  }

})


if (wcasccmp3file.length > 10){
    $("#wcasccimg").removeAttr('hidden');
  }

$("#wcascc").click(function(){
  if(wcasccplay.paused != true){


    wcasccplay.pause();
    wcasccplay.currentTime = 0;

  }else{
    pauseAll();
    wcasccplay.play();

  }

})
