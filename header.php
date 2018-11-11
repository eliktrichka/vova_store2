<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>

<html lang="zxx">


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/07-08-2018/goggles-web_Free/1521872807/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 08:49:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Goggles Ecommerce Category Bootstrap responsive Web Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/shop.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/checkout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
          rel="stylesheet">
</head>

<body>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
        }
    })();
</script>
<script>
    (function(){
        if(typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-125810435-1');
</script><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-30027142-1', 'w3layouts.com');
    ga('send', 'pageview');
</script>
<body>
<div class="banner-top container-fluid" id="home">
    <!-- header -->
    <header>
        <div class="row">
            <div class="col-md-3 top-info text-left mt-lg-4">
                <h6>Need Help</h6>
                <ul>
                    <li>
                        <i class="fas fa-phone"></i> Call</li>
                    <li class="number-phone mt-3">+38 096 1213141</li>
                </ul>
            </div>
            <div class="col-md-6 logo-w3layouts text-center">
                <h1 class="logo-w3layouts">
                    <a class="navbar-brand" href="http://vova.titanstore.kh.ua">
                        Goggles </a> 
                </h1>
            </div>
            <div class="col-md-3 top-info-cart text-right mt-lg-4">
                <ul class="cart-inner-info">
                    <li class="button-log">
                        <a class="btn-open" href="#">
                                                            <?php
                            if (empty($_SESSION['login']) or empty($_SESSION['id']))
                                {// Если пусты, то мы не выводим ссылку
                                echo "Hello Guest";
                                }
                                else
                                {// Если не пусты, то мы выводим ссылку
                                                                       echo "Hello ".$_SESSION['login'];
                                }
//                                print_r($_SESSION);
                                ?> <span class="fa fa-user" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="galssescart galssescart2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_googles_cart" type="submit" name="submit" value="">
                                My Cart
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </form>
                    </li>
                </ul>
                <!---->
                <div class="overlay-login text-left">
                    <button type="button" class="overlay-close1">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="wrap">
                        <h5 class="text-center mb-4">Login</h5>
                        <div class="login p-5 bg-dark mx-auto mw-100">
                            <form action="testreg.php" method="POST">



                                <?php
                                // Проверяем, пусты ли переменные логина и id пользователя
                                if (empty($_SESSION['login']) or empty($_SESSION['id']))
                                {// Если пусты, то мы не выводим ссылку
                                    ?>
                                <div class="form-group">
                                    <label class="mb-2">login</label>
                                    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label class="mb-2">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                                </div>
                                <div class="form-check mb-2">
<!--                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
                                </div>
                                <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                                <br>
                                <button class="submit check_out" onclick="window.location.href='registration.php'">REGISTER</button><br>
                                   <?php
                                    echo "Вы вошли на сайт, как гость<br>";
                                }else{// Если не пусты, то мы выводим ссылку
                                   ?>
                                    <input type="button" class="submit check_out" onclick="window.location.href='delete_session.php'" value="Go out" /><br>
                                <?php
                                    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='/user_card.php'>Эта ссылка доступна только<br>  зарегистрированным пользователям</a>";
                                }
//                                print_r($_SESSION);
                                ?>
                            </form>
                        </div>
                        <!---->
                    </div>
                </div>
                <!---->
            </div>
        </div>

        <label class="top-log mx-auto"></label>
        <nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
					</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-mega mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link ml-lg-0" href="index.php">Home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">catalog</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                    <a class="nav-link" href="about.html">About</a>-->
<!--                    </li>-->

                </ul>

            </div>
        </nav>
    </header>
