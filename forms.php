<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}



?>
<?php
session_start();
//conect to the database
include('connection.php');

//logout
include('logout.php');

//remember me
include('remember.php');

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=0.6'>
    <title>Dicion&#225;rio San&#246;ma</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='styling.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
   
      <link href="http://vjs.zencdn.net/7.0/video-js.min.css" rel="stylesheet">
  <script src="http://vjs.zencdn.net/7.0/video.min.js"></script>
  </head>
    <body>
        
        
        
        
        
          <!--Update username-->    
      <form method="post" id="updateusernameform">
        <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Altere seu Nome de Usuário: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--update username message from PHP file-->
                  <div id="updateusernamemessage"></div>
                  

                  <div class="form-group">
                      <label for="username" >Username:</label>
                      <input class="form-control" type="text" name="username" id="username" maxlength="30" value="<?php echo $username; ?>">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <input class="btn btn-success" name="updateusername" type="submit" value="Atualizar">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button> 
              </div>
          </div>
      </div>
      </div>
      </form>

    <!--Update email-->    
      <form method="post" id="updateemailform">
        <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Digite o novo email email: 
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Update email message from PHP file-->
                  <div id="updateemailmessage"></div>
                  

                  <div class="form-group">
                      <label for="email" >Email:</label>
                      <input class="form-control" type="email" name="email" id="email" maxlength="50" value="<?php echo $email ?>">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <input class="btn btn-success" name="updateusername" type="submit" value="Atualizar">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button> 
              </div>
          </div>
      </div>
      </div>
      </form>
      
    <!--Update password-->    
      <form method="post" id="updatepasswordform">
        <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">Defina uma nova senha:
                  </h4>
              </div>
              <div class="modal-body">
                  
                  <!--Update password message from PHP file-->
                  <div id="updatepasswordmessage"></div>
                  

                  <div class="form-group">
                      <label for="currentpassword" class="sr-only" >Sua senha atual:</label>
                      <input class="form-control" type="password" name="currentpassword" id="currentpassword" maxlength="30" placeholder="Sua senha atual">
                  </div>
                  <div class="form-group">
                      <label for="password" class="sr-only" >Digite a nova senha:</label>
                      <input class="form-control" type="password" name="password" id="password" maxlength="30" placeholder="Digite a nova senha">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only" >Confirme sua senha:</label>
                      <input class="form-control" type="password" name="password2" id="password2" maxlength="30" placeholder="Confirme sua senha">
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <input class="btn btn-success" name="updateusername" type="submit" value="Atualizar">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button> 
              </div>
          </div>
      </div>
      </div>
      </form>
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script src="js/profile.js"></script>    
            
        
        
  </body>
</html>






