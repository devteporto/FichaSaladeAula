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
                  <?php session_start()?>
               <p>Olá, <span><?php echo $_SESSION['usuario']; ?></span></p>
              </div>  
              <div class="user_social">
              <a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/white/twitter.png" alt="" title="" /></a>              </div>       
            </div>

                  <nav class="user-nav">
                    <ul>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Settings</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>Account</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong class="green">12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/download.png" alt="" title="" /><span>Downloads</span><strong class="blue">5</strong></a></li>
                      <li><a href="index.html" class="close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
          </div>
    </div>



    <div class="views">

      <div class="view view-main">

        <div class="pages  toolbar-through">

          <div data-page="index" class="page homepage">
            <div class="page-content">
<!--					<div class="logo"><img src="images/logo.png" alt="" title="" /></div>-->
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
              <div class="toolbar-inner">
              <ul class="toolbar_icons">
              <li><a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/user.png" alt="" title="" /></a></li>
              <li><a href="photos.html"><img src="images/icons/white/photos.png" alt="" title="" /></a></li>
              <li class="menuicon"><a href="menu.html"><img src="images/icons/white/menu.png" alt="" title="" /></a></li>
              <li><a href="blog.html"><img src="images/icons/white/blog.png" alt="" title="" /></a></li>
              <li><a href="contact.html"><img src="images/icons/white/contact.png" alt="" title="" /></a></li>
              </ul>
              </div>  
        </div>
      </div>
    </div>
    
    
    <!-- Login Popup -->

    
    <!-- Register Popup -->
    <div class="popup popup-signup">
    <div class="content-block-login">
      <h4>REGISTER</h4>
      <div class="form_logo"><img src="images/logo.png" alt="" title="" /></div>
            <div class="loginform">
            <form id="LoginForm" method="post">
            <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
            <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
            <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN UP" />
            </form>
            <div class="signup_social">
            <a href="#" class="signup_facebook">FACEBOOK</a>
            <a href="#" class="signup_twitter">TWITTER</a>            </div>
            </div>
      <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>

    <!-- Login Popup -->
    <div class="popup popup-forgot">
    <div class="content-block-login">
      <h4>FORGOT PASSWORD</h4>
      <div class="form_logo"><img src="images/logo.png" alt="" title="" /></div>
            <div class="loginform">
            <form id="LoginForm" method="post">
            <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="RESEND PASSWORD" />
            </form>
            <div class="signup_bottom">
            <p>Check your email and follow the instructions to reset your password.</p>
            </div>
            </div>
      <div class="close_loginpopup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>

    
    <!-- Social Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Follow Us</h4>
      <p>Social icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
      <li><a href="#"><img src="images/icons/white/twitter.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/facebook.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/googleplus.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/dribbble.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/linkedin.png" alt="" title="" /></a></li>
      <li><a href="#"><img src="images/icons/white/pinterest.png" alt="" title="" /></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>
    
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/my-app_aplication.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="js/email.js"></script>
  </body>
</html>