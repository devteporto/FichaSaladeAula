<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link href="images/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
<link href="images/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<title>upmobile - HTML mobile template</title>
<link rel="stylesheet" href="css/framework7.css">
<link rel="stylesheet" href="style.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link type="text/css" rel="stylesheet" href="css/animations.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet"> 
</head>
<body id="mobile_wrap">

    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>

    <div class="panel panel-left panel-reveal">
			<nav class="sidebar-nav">
				<ul>
					<li><a href="index.html" class="close-panel"><img src="images/icons/green/home.png" alt="" title="" /><span>Home</span></a></li>
					<li><a href="about.html" class="close-panel"><img src="images/icons/green/mobile.png" alt="" title="" /><span>About</span></a></li>
					<li><a href="features.html" class="close-panel"><img src="images/icons/green/features.png" alt="" title="" /><span>Features</span></a></li>
					<li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="images/icons/green/lock.png" alt="" title="" /><span>Login</span></a></li>
					<li><a href="team.html" class="close-panel"><img src="images/icons/green/users.png" alt="" title="" /><span>Team</span></a></li>
					<li><a href="blog.html" class="close-panel"><img src="images/icons/green/blog.png" alt="" title="" /><span>Blog</span></a></li>		
					<li><a href="photos.html" class="close-panel"><img src="images/icons/green/photos.png" alt="" title="" /><span>Photos</span></a></li>
					<li><a href="videos.html" class="close-panel"><img src="images/icons/green/video.png" alt="" title="" /><span>Videos</span></a></li>
					<li><a href="music.html" class="close-panel"><img src="images/icons/green/music.png" alt="" title="" /><span>Music</span></a></li>
					<li><a href="shop.html" class="close-panel"><img src="images/icons/green/shop.png" alt="" title="" /><span>Shop</span></a></li>
					<li><a href="cart.html" class="close-panel"><img src="images/icons/green/cart.png" alt="" title="" /><span>Cart</span></a></li>
					<li><a href="tables.html" class="close-panel"><img src="images/icons/green/tables.png" alt="" title="" /><span>Tables</span></a></li>
					<li><a href="toggle.html" class="close-panel"><img src="images/icons/green/toggle.png" alt="" title="" /><span>Toggle</span></a></li>
					<li><a href="tabs.html" class="close-panel"><img src="images/icons/green/tabs.png" alt="" title="" /><span>Tabs</span></a></li>
					<li><a href="form.html" class="close-panel"><img src="images/icons/green/form.png" alt="" title="" /><span>Forms</span></a></li>
					<li><a href="contact.html" class="close-panel"><img src="images/icons/green/contact.png" alt="" title="" /><span>Contact</span></a></li>
				</ul>
			</nav>
    </div>



    <div class="panel panel-right panel-reveal">
      <div class="user_login_info">
	  
                <div class="user_thumb">
		  <div class="user_avatar"><img src="images/avatar.jpg" alt="" title="" /></div>  
                  <div class="user_details">
                   <p>Welcome <span>John Doe</span></p>
                  </div>  
                  <div class="user_social">
      <ul>
      <li><a href="http://twitter.com/" class="external"><img src="images/icons/green/twitter.png" alt="" title="" /></a></li>
      <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/green/facebook.png" alt="" title="" /></a></li>
      <li><a href="http://plus.google.com" class="external"><img src="images/icons/green/gplus.png" alt="" title="" /></a></li>
      </ul>	  
                  </div>     
                </div>
				
                  <nav class="user-nav">
                    <ul>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Account Settings</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>My Account</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/love.png" alt="" title="" /><span>Favorites</span><strong>5</strong></a></li>
                      <li><a href="index.html" class="close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
      </div>
    </div>

    <div class="views">

      <div class="view view-main">




    <!-- Login TELA -->
    <div class="login-screen modal-in">
        <div class="content-block">
            <h4>FICHA OBSERVAÇÃO DE AULA</h4>
            <div class="loginform">
                <form id="LoginForm" method="post" action="conecta.php">
                    <input type="text" name="usu" value="" class="form_input required" placeholder="nome de usuário" />
                    <input type="password" name="senha" value="" class="form_input required" placeholder="senha" />
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">* Entre com o seu usuário e senha de rede</a></div>
                    <input type="submit" name="submit" class="form_submit" id="submit" value="ENTRAR" />
                </form>

            </div>

        </div>
    </div>





    </div>
    
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js" ></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/email.js"></script>
<script type="text/javascript" src="js/audio.min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/selectFx.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>
  </body>
</html>