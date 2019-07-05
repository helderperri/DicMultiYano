

//Ajax Call for the sign up form 
//Once the form is submitted
$("#signupform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the login form
//Once the form is submitted
$("#loginform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "searchAlphabeticView.php?letter=A";
            }else{
                $('#loginmessage').html(data);   
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the login form2
//Once the form is submitted
$("#loginform2").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "searchAlphabeticView.php?letter=A";
            }else{
                $('#loginmessage2').html(data);   
            }
        },
        error: function(){
            $("#loginmessage2").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the forgot password form
//Once the form is submitted
$("#forgotpasswordform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "forgot-password.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            
            $('#forgotpasswordmessage').html(data);
        },
        error: function(){
            $("#forgotpasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the edit pronunciation form
//Once the form is submitted

$(".editpronform").on('submit', function(event){ 
    //prevent default php processing
    event.preventDefault(event);
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "deleteElement.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#editpronmessage').html(data);   
            }
        },
        error: function(){
            $("#editpronmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

//Ajax Call for the edit pronunciation form
//Once the form is submitted

$(".editvideoform").on('submit', function(event){ 
    //prevent default php processing
    event.preventDefault(event);
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "deleteElement.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#editvideomessage').html(data);   
            }
        },
        error: function(){
            $("#editvideomessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

//Ajax Call for the delete word form
//Once the form is submitted

$(".deletewordform").on('submit', function(event){ 
    //prevent default php processing
    event.preventDefault(event);
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "deleteElement.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#deleteword').html(data);   
            }
        },
        error: function(){
            $("#deleteword").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});



//Ajax Call for the restore delete word form
//Once the form is submitted

$(".restoredeletedwordform").on('submit', function(event){ 
    //prevent default php processing
    event.preventDefault(event);
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "restoreDeletedWordAction.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#messagerestoredeletedword').html(data);   
            }
        },
        error: function(){
            $("#messagerestoredeletedword").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

//Ajax Call for the edit word form
//Once the form is submitted

$(".newwordform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "newElement.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#newword').html(data);   
            }
        },
        error: function(){
            $("#newword").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the edit word form
//Once the form is submitted
$(".editwordform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "editWordAction3.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#message').html(data);   
            }
        },
        error: function(){
            $("#message").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});





//Ajax Call for the restore edited word form
//Once the form is submitted
$(".restoreeditedwordform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "restoreWordAction.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $("#restoreeditedwordmessage").html(data);   
            }
        },
        error: function(){
            $("#restoreeditedwordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});






//Ajax Call for the edit example form
//Once the form is submitted
$(".editexampleform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "editWordAction4.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messageeditexample").html(data);   
            }
        },
        error: function(){
            $(".messageeditexample").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});





//Ajax Call for the new example form
//Once the form is submitted
$(".newexampleform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "newExample.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messagenewexample").html(data);   
            }
        },
        error: function(){
            $(".messagenewexample").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});





//Ajax Call for the restore edited example form
//Once the form is submitted
$(".restoreeditedexampleform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "restoreOldVersionsAction.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messagerestoreeditedexample").html(data);   
            }
        },
        error: function(){
            $(".messagerestoreeditedexample").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});





//Ajax Call for the restore deletes example form
//Once the form is submitted
$(".restoredeletedexampleform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "restoreExampleAction.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messagerestoreeditedexample").html(data);   
            }
        },
        error: function(){
            $(".messagerestoreeditedexample").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});



//Ajax Call for the restore deletes example form
//Once the form is submitted
$(".metadataform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messagemetadata").html(data);   
            }
        },
        error: function(){
            $(".messagemetadata").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


//Ajax Call for the edit semantic domain form
//Once the form is submitted
$(".editsemanticform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "editSemantic.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messageeditsemantic").html(data);   
            }
        },
        error: function(){
            $(".messageeditsemantic").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});





//Ajax Call for the delete example form
//Once the form is submitted
$(".deleteexampleform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "deleteElement.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $(".messagedeleteexample").html(data);   
            }
        },
        error: function(){
            $(".messagedeleteexample").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});




//Ajax Call for the edit example form
//Once the form is submitted
$("#restoreOldVersionsModal").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "restoreOldVersionsAction.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $("#messageexampleupdate").html(data);   
            }
        },
        error: function(){
            $("#messageexampleupdate").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});



//Ajax Call for the Upload Pronunciation form
//Once the form is submitted
$( '.uploadpronform' )
  .submit( function( e ) {
        $('#errormessagepron').html('<div class="alert alert-success">Aguarde...  <img src="loading.gif"></div>');        e.preventDefault();
    $.ajax( {
      url: 'uploadFile.php',
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#errormessagepron').html(data);   
            }
        },
    } );
  } );


//Ajax Call for the Upload Video form
//Once the form is submitted
$( '.uploadvideoform' )
  .submit( function( e ) {
        $('#errormessagevideo').html('<div class="alert alert-success">Aguarde...  <img src="loading.gif"></div>');
     e.preventDefault();
    $.ajax( {
      url: 'uploadFile.php',
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#errormessagevideo').html(data);   
            }
        },
    } );
   
  } );


//Ajax Call for the Upload Image form
//Once the form is submitted
$( '.uploadimageform' )
  .submit( function( e ) {
    $('#errormessageimage').html('<div class="alert alert-success">Aguarde...  <img src="loading.gif"></div>');
    console.log("ajax");
     e.preventDefault();
    $.ajax( {
      url: 'uploadFile.php',
      type: 'POST',
      data: new FormData( this ),
      processData: false,
      contentType: false,
        success: function(data){
            if(data == "success"){
            //    window.location = "mainpageloggedin.php";
            }else{
                $('#errormessageimage').html(data);   
            }
        },
    } );
   
  } );


/*
//Ajax Call for the edit form
//Once the form is submitted
$("#uploadform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "uploadFile.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#message').html(data);   
            }
        },
        error: function(){
            $("#message").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});


*/



//Ajax Call for the delete image form
//Once the form is submitted
$(".deleteimageform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "deleteElement.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#errormessagedeleteimage').html(data);   
            }
        },
        error: function(){
            $("#errormessagedeleteimage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

var status = 0;
function Play(music,id) {
    var audio = $("#"+id); 
	if(status == 0 || status == 2)
	{     
		if(status == 0) audio.attr("src", music);
		audio[0].play();
		$("#play").attr("class","glyphicon glyphicon-pause aligned")
		status = 1;
	} else if(status == 1) {    
		audio[0].pause();
		$("#play").attr("class","glyphicon glyphicon-play aligned")
		status = 2;
	}
}
function Stop(music,id) {
	var audio = $("#"+id);
	audio.attr("src", '');
	$("#play").attr("class","glyphicon glyphicon-play aligned")
	status = 0;
}
function Restart(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",0)
}
function VolumeUp(music,id) {
	var audio = $("#"+id);
	var volume = $("#"+id).prop("volume")+0.1;
	if(volume > 1) volume = 1;
    $("#"+id).prop("volume",volume);
}
function VolumeDown(music,id) {
	var audio = $("#"+id);
	var volume = $("#"+id).prop("volume")-0.1;
	if(volume < 0) volume = 0;
    $("#"+id).prop("volume",volume);
}
function Forward5(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")+5);
}
function Backward5(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")-5);
}
function Forward1(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")+1);
}
function Backward1(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")-1);
}