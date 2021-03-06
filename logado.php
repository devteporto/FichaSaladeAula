
<?php

include('entity/Usuario.class.php');


session_start();
if(!isset ($_SESSION['usuario']))
{
    unset($_SESSION['usuario']);
    header('location:index.php');
}


$usuarioRecebido = $_SESSION['usuario'];


?>

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
    <title>Ficha Observação de Aula</title>
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
            <li><a href="logado.php" class="close-panel"><img src="images/icons/green/home.png" alt="" title="" /><span>Home</span></a></li>
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
            <div class="user_avatar"><img src="http://stock.wikimini.org/w/images/9/95/Gnome-stock_person-avatar-profile.png" alt="" title="" /></div>
            <div class="user_details">

                <p>Olá! <span><?php echo $usuarioRecebido->getNome(); ?></span></p>
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
                <li><a href="features.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>Minhas observações</span></a></li>
                <li><a href="features.html" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Trocar foto perfil</span></a></li>
                <li>
                    <a onclick="irpagina('controller/doLogout.php?token=<?=md5(session_id())?>')" href='' class="close-panel">
                        <img src="images/icons/white/lock.png" alt="" title="" />
                        <span>Logout</span>
                    </a>
                </li>


            </ul>
        </nav>
    </div>
</div>

<div class="views">

    <div class="view view-main">



        <div class="pages">

            <div data-page="index" class="page homepage">
                <div class="page-content homepagecontent">

                    <div class="homenavbar">
                        <h1><span>techporto</span>classroom</h1>

                    </div>

                    <!-- Slider -->
                    <div class="swiper-container swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <img src="images/2.jpg" alt="" title="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="images/1.jpg" alt="" title="" />
                            </div>
                            <div class="swiper-slide">
                                <img src="images/3.jpg" alt="" title="" />

                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>

                    <nav class="main-nav">
                        <ul>

                            <li><a href="index.php"><img src="images/icons/white/home.png" alt="" title="" /><span>HOME</span></a></li>
                            <li><a href="ficha.php"><img src="images/icons/white/blog.png" alt="" title="" /><span>FICHA DE OBSERVAÇÃO</span></a></li>
                            <li><a href="lista.php"><img src="images/icons/white/contact.png" alt="" title="" /><span>MINHAS FICHAS</span></a></li>
<!--                            <li><a href="features.html"><img src="images/icons/green/settings.png" alt="" title="" /><span>FEATURES</span></a></li>-->


                            <li><a href="photos.html"><img src="images/icons/white/photos.png" alt="" title="" /><span>FOTOS SALA DE AULA</span></a></li>
                            <li><a href="videos.html"><img src="images/icons/white/video.png" alt="" title="" /><span>VIDEOS</span></a></li>


<!--                            <li><a href="shop.html"><img src="images/icons/green/shop.png" alt="" title="" /><span>SHOP</span></a></li>-->
<!--                            <li><a href="cart.html"><img src="images/icons/green/cart.png" alt="" title="" /><span>CART</span></a></li>-->
<!--                            <li><a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/green/twitter.png" alt="" title="" /><span>SOCIAL</span></a></li>-->
                            <li><a href="#" data-panel="right" class="open-panel"><img src="images/icons/white/users.png" alt="" title="" /><span>MEU USUÁRIO</span></a></li>
<!--                            <li><a href="#" data-popup=".popup-login" class="open-popup"><img src="images/icons/green/lock.png" alt="" title="" /><span>SAIR</span></a></li>-->

<!--                            <li><a href="contact.html"><img src="images/icons/green/contact.png" alt="" title="" /><span>CONTACT</span></a></li>-->
                        </ul>
                    </nav>

                </div>
            </div>
        </div>


    </div>
</div>


<!-- Login Popup -->
<div class="popup popup-login">
    <div class="content-block">
        <h4>LOGIN</h4>
        <div class="loginform">
            <form id="LoginForm" method="post">
                <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
                <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
                <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div>
                <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN IN" />
            </form>
            <div class="signup_bottom">
                <p>Don't have an account?</p>
                <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
            </div>
        </div>
        <div class="close_popup_button">
            <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
        </div>
    </div>
</div>

<!-- Register Popup -->
<div class="popup popup-signup">
    <div class="content-block">
        <h4>REGISTER</h4>
        <div class="loginform">
            <form id="RegisterForm" method="post">
                <input type="text" name="Username" value="" class="form_input required" placeholder="Username" />
                <input type="text" name="Email" value="" class="form_input required" placeholder="Email" />
                <input type="password" name="Password" value="" class="form_input required" placeholder="Password" />
                <input type="submit" name="submit" class="form_submit" id="submit" value="SIGN UP" />
            </form>
            <h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
            <div class="signup_social">
                <a href="http://www.facebook.com/" class="signup_facebook external">FACEBOOK</a>
                <a href="http://www.twitter.com/" class="signup_twitter external">TWITTER</a>
            </div>
        </div>
        <div class="close_popup_button">
            <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
        </div>
    </div>
</div>

<!-- Forgot Password Popup -->
<div class="popup popup-forgot">
    <div class="content-block">
        <h4>FORGOT PASSWORD</h4>
        <div class="loginform">
            <form id="ForgotForm" method="post">
                <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                <input type="submit" name="submit" class="form_submit" id="submit" value="RESEND PASSWORD" />
            </form>
            <div class="signup_bottom">
                <p>Check your email and follow the instructions to reset your password.</p>
            </div>
        </div>
        <div class="close_popup_button">
            <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
        </div>
    </div>
</div>

<!-- Social Icons Popup -->
<div class="popup popup-social">
    <div class="content-block">
        <h4>Social Share</h4>
        <p>Share icons solution that allows you share and increase your social popularity.</p>
        <ul class="social_share">
            <li><a href="http://twitter.com/" class="external"><img src="images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
            <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
            <li><a href="http://plus.google.com" class="external"><img src="images/icons/black/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
            <li><a href="http://www.dribbble.com/" class="external"><img src="images/icons/black/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
            <li><a href="http://www.linkedin.com/" class="external"><img src="images/icons/black/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
            <li><a href="http://www.pinterest.com/" class="external"><img src="images/icons/black/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
    </div>
</div>



<script type="text/javascript" src="js/framework7.js"></script>
<script type="text/javascript" src="js/jquery.swipebox.js"></script>



<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/selectFx.js"></script>
<script type="text/javascript" src="js/my-app.js"></script>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script>
    $(function(){

        /* Delete button ajax call */
        $('.delbtn').on( 'click', function(){
            if(confirm('This action will delete this record. Are you sure?')){
                var pid = $(this).data('pid');
                $.post( "controller/listaController.php", { pid: pid })
                    .done(function( data ) {
                        if(data > 0){
                            $('.success').show(3000).html("Item apagado com sucesso!").delay(3200).fadeOut(6000);
                        }else{
                            $('.error').show(3000).html("Erro ao apagar tente novamente").delay(3200).fadeOut(6000);;
                        }
                        setTimeout(function(){
                            window.location.reload(1);
                        }, 5000);
                    });
            }
        });

        /* Edit button ajax call */
        $('.editbtn').on( 'click', function(){
            var pid = $(this).data('pid');
            $.get( "getrecord_ajax.php", { id: pid })
                .done(function( product ) {
                    data = $.parseJSON(product);

                    if(data){
                        $('#prod_id').val(data.id);
                        $('#product_name').val(data.product_name);
                        $('#price').val(data.price);
                        $('#category').val(data.category);
                        $("#saverecords").val('Save Records');
                    }
                });
        });

        /* Edit button ajax call */
        $('#saverecords').on( 'click', function(){
            var prod_id  = $('#prod_id').val();
            var product = $('#product_name').val();
            var price   = $('#price').val();
            var category = $('#category').val();
            if(!product || !price || !category){
                $('.error').show(3000).html("All fields are required.").delay(3200).fadeOut(3000);
            }else{
                if(prod_id){
                    var url = 'edit_record_ajax.php';
                }else{
                    var url = 'add_records_ajax.php';
                }
                $.post( url, {prod_id:prod_id, product: product, category: category, price: price  })
                    .done(function( data ) {
                        if(data > 0){
                            $('.success').show(3000).html("Record saved successfully.").delay(2000).fadeOut(1000);
                        }else{
                            $('.error').show(3000).html("Record could not be saved. Please try again.").delay(2000).fadeOut(1000);
                        }
                        $("#saverecords").val('Add Records');
                        setTimeout(function(){
                            window.location.reload(1);
                        }, 15000);
                    });
            }
        });
    });
</script>
</body>
</html>