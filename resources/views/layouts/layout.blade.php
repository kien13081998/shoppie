<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>shoppie</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name="description" content="Modern Online Store">
    <meta name="keywords" content="Shoppie, Modern Online Store">
    <meta name="author" content="http://adamantium.sk/">
    <meta property="og:image" content="{{asset('/images/facebook-like-image.jpg')}}">


    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/unsemantic.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/js/fancybox/jquery.fancybox-1.3.4.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/js/juicy/css/juicy.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/js/juicy/css/themes/shoppie/style.css')}}" type="text/css">
    <!--[if IE 7]>
            <link rel="stylesheet" href="css/font-awesome/css/font-awesome-ie7.min.css">
            <![endif]-->
    <link rel="stylesheet" href="{{asset('/css/colors/red.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/base.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/layout.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/pages/homepage.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/pages/compare.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/pages/product-detail.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/pages/cart.css')}}" type="text/css">

    <link rel="shortcut icon" href="{{asset('/images/icons/favicon.ico')}}">

    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/images/icons/apple-touch-icon-152.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/images/icons/apple-touch-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/images/icons/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('/images/icons/apple-touch-icon.png')}}">
    <style media="screen">
    .row {
      box-sizing: border-box;
        width: 100%;
        float: left;
    }
    .login-body {
        background: #65cea7 url("../../images/login-bg.jpg") no-repeat fixed;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .form-signin {
        max-width: 330px;
        margin: 100px auto;
        background: #fff;
        border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    .form-signin .form-signin-heading {
        margin: 0;
        padding: 25px 15px;
        text-align: center;
        color: #fff;
        position: relative;
    }

    .sign-title {
        font-size: 24px;
        color: #fff;
        position: absolute;
        top: -60px;
        left: 0;
        text-align: center;
        width: 100%;
        text-transform: uppercase;
    }

    .form-signin .checkbox {
        margin-bottom: 14px;
        font-size: 13px;
    }

    .form-signin .checkbox {
        font-weight: normal;
        color: #fff;
        font-weight: normal;
        font-family: 'Open Sans', sans-serif;
        position: absolute;
        bottom: -50px;
        width: 100%;
        left: 0;
    }

    .form-signin .checkbox a, .form-signin .checkbox a:hover {
        color: #fff;
    }

    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="text"], .form-signin input[type="password"] {
        margin-bottom: 15px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        border: 1px solid #eaeaec;
        background: #eaeaec;
        box-shadow: none;
        font-size: 12px;
    }

    .form-signin .btn-login {
        background: #6bc5a4;
        color: #fff;
        text-transform: uppercase;
        font-weight: normal;
        font-family: 'Open Sans', sans-serif;
        margin: 20px 0 5px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        font-size: 17px;
    }

    .form-signin .btn-login:hover {
        background: #688ac2;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .form-signin p {
        text-align: left;
        color: #b6b6b6;
        font-size: 16px;
        font-weight: normal;
    }

    .form-signin a, .form-signin a:hover {
        color: #6bc5a4;
    }

    .form-signin a:hover {
        text-decoration: underline;
    }

    .login-wrap {
        padding: 20px;
        position: relative;
    }
    .registration {
        color: #c7c7c7;
        text-align: center;
        margin-top: 15px;
    }
    </style>
  </head>
  <body class="body-background2 content-font dark-color">

    <header>

    <nav class="top-menu grid-container hide-on-tablet hide-on-mobile">
    <div class="grid-100">
    <!-- <div class="fb-like" data-href="https://www.facebook.com/adamantium.solutions" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div> -->
    <div class="top-menu-left">
    <ul>
    <li>
    <a href="../../blog" class="dark-color">Blog</a>
    </li>
    <li>
    <a href="../../about" class="dark-color">About Us</a>
    </li>


    </ul>
    </div>
    <div class="top-menu-right">
    <ul>
    <li>
    @if(Session::get('id'))
    <li>
    <a href="/my-account/" class="dark-color">My Account</a>
    </li>
    <li>
    <a href="/logout/" class="dark-color">Log out</a>
    </li>
    @else
    <a href="/user/login" class="dark-color" onclick="Global.clickShowToggle('#quick-login'); return false;">
      <i class="icon-off"> Log in</i>
    </a>
    </li>
    <li>
    <a href="/user/register" class="dark-color">Register</a>
    </li>
    @endif
    </ul>
    </div>
    </div>
    </nav>

    <div class="header-middle grid-container light-gradient">
    <div class="grid-100">
    <a href="../../home" class="header-logo grid-20" title="Shoppie">
    <img src="{{asset('../images/img-shoppie.png')}}" alt="Shoppie"/>
    </a>
    <div class="grid-80 remove-whitespaces">
    <div class="header-middle-box">
    <form class="input-with-submit header-search" action="http://adamantium.sk/shoppie/html/homepage.html" method="POST">
    <input type="text" class="text-input input-round dark-color light-bg" value="" placeholder="Search...">
    <button type="submit" class="input-round-submit middle-color dark-hover"><i class="icon-search"></i></button>
    </form>
    </div>
    <div class="header-middle-box header-compare remove-whitespaces hide-on-mobile">

    </div>
    <div class="header-middle-box last-box hide-on-mobile hide-on-tablet">
    <div class="header-cart" id="header-cart">
    <a href="/show" class="text-input input-round dark-color light-bg">
      <strong class="active-color" id="cart-count">
        <i class="icon-shopping-cart" >&nbsp;</i>
      </strong>
    <strong class="active-color" id="show_qty">
      0
    </strong>
    items
    &nbsp;|&nbsp;
    <strong class="active-color" id="show_item">0
    </strong>
    &#36;
    </a>
    </div>
    <?php if (Session::get('id')): ?>

    <?php else: ?>
      <div class="{{ $errors->has('err') ? ' has-error' : '' }}">
        @if (session('err'))
        <div class="alert alert-success">
          {{ session('err') }}
        </div>
        @endif
      </div>
    <?php endif; ?>
    </div>
    </div>
    </div>
    </div>

    <nav class="main-menu grid-container" id="main-menu">
    <ul class="main-menu-desktop dark-gradient transition-all" id="menu-mobile">
    <li class="middle-color light-hover home">
    <a href="../../home" class="main-menu-item transition-all"><i class="icon-home"></i></a>
    </li>
    <li class="middle-color light-hover back">
    <a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-chevron-left"></i></a>
    </li>
    <li class="light-color active-hover">
    <a href="/product/KID" class="main-menu-item transition-all">Kid</a>
    </li>
    <li class="light-color active-hover">
    <a href="/product/WOMEN" class="main-menu-item transition-all">Women</a>
    </li>
    <li class="light-color active-hover">
    <a href="/product/MEN" class="main-menu-item transition-all">Men</a>
    </li>
    <li class="light-color active-hover">
    <a href="/shoes" class="main-menu-item transition-all">Shoes</a>
    </li>
    <li class="light-color active-hover">
    <a href="/trousers" class="main-menu-item transition-all">Trousers</a>
    </li>

    <li class="light-color active-hover">
    <a href="/news" class="main-menu-item transition-all">What’s new</a>
    </li>
    <li class="light-color active-hover">
      <a href="/sale" class="main-menu-item transition-all">Sale</a>
    </li>
    <li class="active-color dark-hover">
    <a href="/contact" class="main-menu-item transition-all"><i class="icon-star"></i> Contact</a>
    </li>
    </ul>
    </nav>
    </header>

    @yield('content')

    <footer>
    <div class="footer-top grid-container clearfix">
    <div class="grid-50 grid-parent">
    <div class="grid-33 tablet-grid-33">
    <h3 class="light-color subheader-font">
    <strong>Our support</strong>
    </h3>
    <ul class="middle-color">
    <li class="light-hover">
    <a href="#">Delivery Information</a>
    </li>
    <li class="light-hover">
    <a href="#">Privacy policy</a>
    </li>
    <li class="light-hover">
    <a href="#">Terms & Condition</a>
    </li>
    <li class="light-hover">
    <a href="#">Contact us</a>
    </li>
    </ul>
    </div>
    <div class="grid-33 tablet-grid-33">
    <h3 class="light-color subheader-font">
    <strong>Our service</strong>
    </h3>
    <ul class="middle-color">
    <li class="light-hover">
    <a href="my-account.html">My Account</a>
    </li>
    <li class="light-hover">
    <a href="#">Order History</a>
    </li>
    <li class="light-hover">
    <a href="#">Returns</a>
    </li>
    <li class="light-hover">
    <a href="#">Site map</a>
    </li>
    </ul>
    </div>
    <div class="grid-33 tablet-grid-33">
    <h3 class="light-color subheader-font">
    <strong>Information</strong>
    </h3>
    <ul class="middle-color">
    <li class="light-hover">
    <a href="about-us.html">About us</a>
    </li>
    <li class="light-hover">
    <a href="#">Delivery information</a>
    </li>
    <li class="light-hover">
    <a href="#">Privacy policy</a>
    </li>
    <li class="light-hover">
    <a href="#">Terms & Condition</a>
    </li>
    </ul>
    </div>
    </div>
    <div class="grid-50 grid-parent">
    <div class="grid-50 tablet-grid-50">
    <h3 class="light-color subheader-font">
    <strong> Payment</strong>
    </h3>
    <p class="middle-color">
    Lorem ipsum dolor sit amet\, de consectetur adipiscing elit
    </p>
    <a href="#"><img src="{{asset('../images/icons/icon-visa-e.png')}}" alt="Visa Electron"/></a>
    <a href="#"><img src="{{asset('../images/icons/icon-mastercard.png')}}" alt="MasterCard"/></a>
    <a href="#"><img src="{{asset('../images/icons/icon-paypal.png')}}" alt="PayPal"/></a>
    <a href="#"><img src="{{asset('../images/icons/icon-visa.png')}}" alt="Visa"/></a>
    </div>
    <div class="grid-50 tablet-grid-50">
    <h3 class="light-color">
    <strong>Newsletter</strong>
    </h3>
    <p class="middle-color">
    Lorem ipsum dolor sit amet, de consectetur adipiscing elit
    </p>
    <form method="POST" action="http://adamantium.sk/shoppie/html/homepage.html">
    <div class="input-with-button">
    <input type="text" placeholder="Enter your email..." name="email" class="text-input dark-color light-bg">
    <button type="submit" class="middle-color dark-hover"><i class="icon-plus"></i></button>
    </div>
    </form>
    </div>
    </div>
    </div>

    <div class="footer-bottom grid-container clearfix">
    <div class="footer-copyright middle-color grid-70">
    Copyright 2012 Shoppie. Designed by Viktor Karvai. Code by <a href="http://www.adamantium.sk/" class="light-hover">Adamantum Solutions</a>. All Rights Reserved
    </div>
    <div class="footer-social grid-30">
    <a href="https://www.facebook.com/adamantium.solutions" class="middle-color light-hover transition-color" target="_blank">
    <i class="icon-facebook-sign"></i>
    </a>
    <a href="https://twitter.com/AdamantiumSol" class="middle-color light-hover transition-color" target="_blank">
    <i class="icon-twitter"></i>
    </a>
    <a href="http://www.linkedin.com/pub/michal-juras/28/166/375" class="middle-color light-hover transition-color" target="_blank">
    <i class="icon-linkedin-sign"></i>
    </a>
    <a href="http://pinterest.com/" class="middle-color light-hover transition-color" target="_blank">
    <i class="icon-pinterest-sign"></i>
    </a>
    <a href="https://plus.google.com/u/0/113332714808714572645/posts" class="middle-color light-hover transition-color" target="_blank">
    <i class="icon-google-plus-sign"></i>
    </a>
    </div>
    </div>
    <script src="{{asset('/js/jquery-1.11.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/myscript.js')}}">

    </script>
    </footer>
  </body>
</html>
