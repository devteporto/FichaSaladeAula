<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="apple-touch-startup-image-640x1096.png">
<title>mobix - mobile web app template</title>
<link rel="stylesheet" href="css/framework7.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link type="text/css" rel="stylesheet" href="css/animations.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
</head>
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-cover">
          <div class="user_login_info">
            <div class="user_thumb">
            <img src="images/profile.jpg" alt="" title="" />
              <div class="user_details">
               <p>Olá, <span>John Doe</span></p>
              </div>  

            </div>

                  <nav class="user-nav">
                    <ul>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>Acompanhamentos</span></a></li>
                        <!-- <li><a href="features.html" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong class="green">12</strong></a></li>-->
                      <li><a href="index.php" class="close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
          </div>
    </div>



    <div class="views">

      <div class="view view-main">

        <div class="pages  toolbar-through">

          <div data-page="index" class="page homepage">
            <div class="page-content">
					<!--<div class="logo"><img src="images/logo.png" alt="" title="" /></div> -->
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->

      </div>
    </div>
    
    
    <!-- Login Popup -->
    <div class="popup popup-login">
    <div class="content-block-login">
      <h4>Efetuar Login</h4>
      <div class="form_logo">FICHA DE  OBSERVAÇÃO DE AULA</OB></div>
        <div class="loginform">

            <form id="LoginForm" method="post" action="conecta.php" name="form" AUTOCOMPLETE='ON' onSubmit="return valida()">
            <input type="text" name="usu" value="" class="form_input required" placeholder="Usuário de Rede" />
            <input type="password" name="senha" value="" class="form_input required" placeholder="Senha" />
            <div class="forgot_pass"><p>Entre com o seu usuário e senha de rede</p></div>
            <input type="submit" name="submit" class="form_submit" id="submit" value="Entrar" />
            </form>

      <!--<div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>-->
        </div>
    </div>
    


    </div>
    

    
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/email.js"></script>  </body>
</html>