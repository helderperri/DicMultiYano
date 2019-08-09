<?php
session_start();
include('connection.php');

//logout
include('logout.php');

//remember me
include('remember.php');

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

?>

<?php
$username = $_SESSION['username'];
date_default_timezone_set("America/Sao_Paulo");

        ?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicion&#225;rio Multil&#237;ngue Yanomami</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styling.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

<link rel="manifest" href="/site.webmanifest">

<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#da532c">
<meta name="msapplication-TileColor" content="#d82b5f">
<meta name="theme-color" content="#ffffff">
      <style>
          body {

              background: url("images/image.jpg")  no-repeat;
              background-position:;
              background-size: 100%;
          }
             </style>


  </head>
  <body>
    <!--Navigation Bar-->
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

          <div class="container-fluid">


              <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav navbar-left">
                                <li><a href="../portal/linguas.php">Portal das L&#237;nguas Yanomami</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Entre</a></li>
                  </ul>

              </div>
          </div>

      </nav>
    <!--Jumbotron with Sign up Button-->
      <div class="jumbotron" id="myContainer">
          <h1 style="color:#C9C9C9;">Dicion&#225;rio Multil&#237;ngue Yanomami</h1>
          <p style="color:#C9C9C9;">Conhe&#231;a as l&#237;nguas Yanomami e suas palavras.</p>
          <a href="searchAlphabeticView.php?letter=A"><button type="button" class="btn btn-lg blue entrar">Começe a Navegar</button></a>
          <button type="button" class="btn btn-lg blue entrar" data-target="#loginModal2" data-toggle="modal">Entre na sua conta</button>
          <button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">Cadastre-se</button>
      </div>

    <!--Login form-->
      <form method="post" id="loginform">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Entre na sua conta:
                  </h4>
              </div>
              <div class="modal-body">

                  <!--Login message from PHP file-->
                  <div id="loginmessage"></div>


                  <div class="form-group">
                      <label for="loginemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="loginpassword" class="sr-only">Senha:</label>
                      <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Senha" maxlength="30">
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="rememberme" id="rememberme">
                        Lembrar-me
                      </label>
                          <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                      Esqueceu a senha?
                      </a>
                  </div>

              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Entrar">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Cadastrar-se
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>


          <!--Login form 2-->
      <form method="post" id="loginform2">
        <div class="modal" id="loginModal2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Entre na sua conta:
                  </h4>
              </div>
              <div class="modal-body">

                  <!--Login message from PHP file-->
                  <div id="loginmessage2"></div>


                  <div class="form-group">
                      <label for="loginemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="loginpassword" class="sr-only">Senha:</label>
                      <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Senha" maxlength="30">
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="rememberme" id="rememberme">
                        Lembrar-me
                      </label>
                          <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                      Esqueceu a senha?
                      </a>
                  </div>

              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Entrar">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Cadastrar-se
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>

    <!--Sign up form-->
      <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Cadastre-se e comece a usar o Dicion&#225;rio Multil&#237;gue Yanomami!
                  </h4>
              </div>
              <div class="modal-body">

                  <!--Sign up message from PHP file-->
                  <div id="signupmessage"></div>

                  <div class="form-group">
                      <label for="username" class="sr-only">Nome do Usu&#225;rio:</label>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Escreva seu nome" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="password" class="sr-only">Escolha uma senha:</label>
                      <input class="form-control" type="password" name="password" id="password" placeholder="Escolha uma senha com ao menos uma letra mai&#250;scula e um n&#250;mero" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only">Digite sua senha novamente</label>
                      <input class="form-control" type="password" name="password2" id="password2" placeholder="Digite sua senha novamente" maxlength="30">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="signup" type="submit" value="Corfime o cadastro">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>

    <!--Forgot password form-->
      <form method="post" id="forgotpasswordform">
        <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Esqueceu sua senha? Digite seu email:
                  </h4>
              </div>
              <div class="modal-body">

                  <!--forgot password message from PHP file-->
                  <div id="forgotpasswordmessage"></div>


                  <div class="form-group">
                      <label for="forgotemail" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="btn green" name="forgotpassword" type="submit" value="Enviar">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancelar
                </button>
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="signupModal" data-toggle="modal">
                  Cadastrar-se
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>
    <!-- Footer-->
      <div class="footer">
          <div class="container">
              <p>Portal LinguasYanomami.org Copyright &copy; 2013-<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="js/login.js"></script>




  </body>
</html>
