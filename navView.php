    <!--Navigation Bar-->
   <nav role='navigation' class='navbar navbar-custom navbar-fixed-top'>

          <div class='container-fluid'>

              <div class='navbar-header'>

                  <a class='navbar-brand'>Dicion&#225;rio Mutil&#237;ngue Yanomami</a>
                  <button type='button' class='navbar-toggle' data-target='#navbarCollapse' data-toggle='collapse'>
                      <span class='sr-only'>Toggle navigation</span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>

                  </button>
              </div>
                 <div class='navbar-collapse collapse' id='navbarCollapse'>
                  <ul class='nav navbar-nav'>
                    <li><a href='http://www.linguasyanomami.com/portal/linguas.php'>Portal Línguas Yanomami</a></li>
                      <li><a href='searchAlphabeticView.php?letter=A'>Início</a></li>
                      <li>
            <a href='wordDetail.php?wordID=<?php echo "$id_word_xsu_top"; ?>'><span class='glyphicon glyphicon-pencil'></span> Modo Editar</a>
   </li>
                  </ul>
                  <ul class='nav navbar-nav navbar-right'>
<li><a href='profile.php'>Perfil</a></li>                      <li><a href='#'><b><?php echo "$username";?></b></a></li>
                    <li><a href='index.php?logout=1'>Log out</a></li>
                  </ul>

              </div>
       </div>
      </nav>
