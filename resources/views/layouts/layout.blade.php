<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>shoppie</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name="description" content="Modern Online Store">
    <meta name="keywords" content="Shoppie, Modern Online Store">
    <meta name="author" content="http://adamantium.sk/">
    <meta property="og:image" content="images/facebook-like-image.jpg">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700" type="text/css">
    <link rel="stylesheet" href="{{asset('css/unsemantic.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('js/juicy/css/juicy.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('js/juicy/css/themes/shoppie/style.css')}}" type="text/css">
    <!--[if IE 7]>
            <link rel="stylesheet" href="css/font-awesome/css/font-awesome-ie7.min.css">
            <![endif]-->
    <link rel="stylesheet" href="{{asset('css/colors/red.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/base.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/pages/homepage.css')}}" type="text/css">
    <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/icons/apple-touch-icon-152.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/icons/apple-touch-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/icons/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/icons/apple-touch-icon.png')}}">
    <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-29358822-1']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            </script>

    <!--[if lt IE 9]>
            <script src="js/html5shim.js"></script>
            <![endif]-->
  </head>
  <body class="body-background2 content-font dark-color">

    <header>

    <nav class="top-menu grid-container hide-on-tablet hide-on-mobile">
    <div class="grid-100">
    <div class="fb-like" data-href="https://www.facebook.com/adamantium.solutions" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    <div class="top-menu-left">
    <ul>
    <li>
    <a href="blog.html" class="dark-color">Blog</a>
    </li>
    <li>
    <a href="about-us.html" class="dark-color">About Us</a>
    </li>
    <li>
    <a href="my-account.html" class="dark-color">My Account</a>
    </li>
    </ul>
    </div>
    <div class="top-menu-right">
    <ul>
    <li>
    <a href="log-in.html" class="dark-color" onclick="Global.clickShowToggle('#quick-login'); return false;">
    <i class="icon-off"></i>
    Log In
    </a>

    <form action="http://adamantium.sk/shoppie/html/log-in.html" method="POST">
    <ul class="popup-box quick-login cream-bg" id="quick-login">
    <li class="arrow-top"><span class="shadow cream-bg"></span></li>
    <li class="close-button">
    <a href="#" class="circle-button middle-bg active-bg-hover" onclick="Global.clickShowToggle('#quick-login'); return false;"><span class="cancel"></span></a>
    </li>
    <li>
    <input class="text-input dark-color light-bg" type="text" name="email" placeholder="your email">
    </li>
    <li>
    <input class="text-input dark-color light-bg" type="password" name="password" placeholder="enter password">
    </li>
    <li class="clearfix">
    <a href="forgotten.html" class="forgotten-link middle-color float-left">Have you forgotten<br/> your password?</a>
    <button class="button-small button-with-icon float-right light-color middle-gradient dark-gradient-hover" type="submit">
    Log in
    <span><i class="icon-angle-right"></i></span>
    </button>
    </li>
    </ul>
    </form>
    </li>
    <li>
    <a href="register.html" class="dark-color">Register</a>
    </li>
    <li id="languages-box-holder">
    <a href="#" class="dark-color">
    EN <i class="icon-caret-down"></i>
    </a>

    <ul class="languages-box popup-box cream-bg">
    <li class="arrow-top"><span class="shadow cream-bg"></span></li>
    <li class="focusor-top"></li>
    <li>
    <a href="#" class="dark-color">
    <i class="icon-lang-en"></i>
    English
    </a>
    </li>
    <li>
    <a href="#" class="dark-color">
    <i class="icon-lang-de"></i>
    German
    </a>
    </li>
    <li>
    <a href="#" class="dark-color">
    <i class="icon-lang-fr"></i>
    French
    </a>
    </li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
    </nav>

    <div class="header-middle grid-container light-gradient">
    <div class="grid-100">
    <a href="homepage.html" class="header-logo grid-20" title="Shoppie">
    <img src="images/img-shoppie.png" alt="Shoppie"/>
    </a>
    <div class="grid-80 remove-whitespaces">
    <div class="header-middle-box">
    <form class="input-with-submit header-search" action="http://adamantium.sk/shoppie/html/homepage.html" method="POST">
    <input type="text" class="text-input input-round dark-color light-bg" value="" placeholder="Search...">
    <button type="submit" class="input-round-submit middle-color dark-hover"><i class="icon-search"></i></button>
    </form>
    </div>
    <div class="header-middle-box header-compare remove-whitespaces hide-on-mobile">
    <!-- <a href="compare.html" class="dark-color">
    <i class="icon-signal middle-color">&nbsp;</i>
    Compare (<strong>3</strong>)
    </a>
    <a href="wishlist.html" class="dark-color">
    <i class="icon-heart middle-color">&nbsp;</i>
    Wish list (<strong>7</strong>)
    </a> -->
    </div>
    <div class="header-middle-box last-box hide-on-mobile hide-on-tablet">
    <div class="header-cart" id="header-cart">
    <a href="cart.html" class="text-input input-round dark-color light-bg">
    <strong class="active-color">
    <i class="icon-shopping-cart">&nbsp;</i>
    39
    </strong>
    items
    &nbsp;|&nbsp;
    <strong class="active-color">
    954,00 &euro;
    </strong>
    </a>

    <ul class="popup-box header-quick-cart cream-bg">
    <li class="arrow-top"><span class="shadow cream-bg"></span></li>
    <li class="focusor-top"></li>
    <li class="quick-cart-item light-bg-hover transition-all">
    <a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
    <a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
    <a href="cart.html" class="quick-cart-left dark-color">
    <span class="quick-cart-image"><img src="images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket"/></span>
    <span class="quick-cart-name">Pablo Coelho Men’s Suit Jacket</span>
    </a>
    <a href="cart.html" class="quick-cart-right dark-color">
    3 x
    <strong class="active-color">125,90 &euro;</strong>
    </a>
    </li>
    <li class="list-divider"></li>
    <li class="quick-cart-item light-bg-hover transition-all">
    <a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
    <a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
    <a href="cart.html" class="quick-cart-left dark-color">
    <span class="quick-cart-image"><img src="images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket"/></span>
    <span class="quick-cart-name">Pablo Coelho Men’s Suit Jacket</span>
    </a>
    <a href="cart.html" class="quick-cart-right dark-color">
    3 x
    <strong class="active-color">125,90 &euro;</strong>
    </a>
    </li>
    <li class="list-divider"></li>
    <li class="quick-cart-item light-bg-hover transition-all">
    <a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
    <a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
    <a href="cart.html" class="quick-cart-left dark-color">
    <span class="quick-cart-image"><img src="images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket"/></span>
    <span class="quick-cart-name">Pablo Coelho Men’s Suit Jacket</span>
    </a>
    <a href="cart.html" class="quick-cart-right dark-color">
    3 x
    <strong class="active-color">125,90 &euro;</strong>
    </a>
    </li>
    <li class="list-divider"></li>
    <li class="quick-cart-total">
    <span class="quick-cart-left dark-color">Total</span>
    <span class="quick-cart-right active-color">954,00 &euro;</span>
    </li>
    <li class="list-divider"></li>
    <li class="quick-cart-buttons">
    <a href="cart.html" class="button-small light-color middle-gradient dark-gradient-hover">
    Go to Cart
    </a>
    <a href="checkout-step-1.html" class="button-small light-color active-gradient dark-gradient-hover">
    Check out
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>

    <nav class="main-menu grid-container" id="main-menu">
    <div class="mobile-overlay"></div>

    <ul class="main-menu-mobile">
    <li class="middle-color light-hover">
    <a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-reorder"></i></a>
    </li>
    <li class="middle-color light-hover">
    <a href="homepage.html" class="main-menu-item"><i class="icon-home"></i></a>
    </li>
    <li class="main-menu-cart active-color light-hover">
    <a href="cart.html" class="main-menu-item">
    <i class="icon-shopping-cart">&nbsp;</i>
    39
    &nbsp;|&nbsp;
    954,00 &euro;
    </a>
    </li>
    </ul>

    <ul class="main-menu-desktop dark-gradient transition-all" id="menu-mobile">
    <li class="middle-color light-hover home">
    <a href="homepage.html" class="main-menu-item transition-all"><i class="icon-home"></i></a>
    </li>
    <li class="middle-color light-hover back">
    <a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-chevron-left"></i></a>
    </li>
    <li class="light-color active-hover">
    <a href="products-grid.html" class="main-menu-item transition-all">Women</a>
    </li>
    <li class="light-color active-hover">
    <a href="products-list.html" class="main-menu-item transition-all">Men</a>
    </li>
    <li class="light-color active-hover">
    <a href="products-grid.html" class="main-menu-item transition-all">Kids</a>
    </li>
    <li class="light-color active-hover">
    <a href="products-list.html" class="main-menu-item transition-all">Shoes</a>
    </li>
    <li class="light-color active-hover">
    <a href="products-grid.html" class="main-menu-item transition-all">Sport</a>
    </li>
    <li class="light-color active-hover">
    <a href="products-list.html" class="main-menu-item transition-all">Template pages</a>
    <ul class="mega-menu cream-bg">
    <li class="mega-menu-active cream-gradient"></li>
    <li class="mega-menu-box">
    <span class="mega-menu-title active-color clearfix">E-shop pages</span>
    <ul class="mega-menu-list">
    <li>
    <a href="homepage.html" class="dark-color active-hover">
    Homepage
    </a>
    </li>
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    Products grid listing
    </a>
    </li>
    <li>
    <a href="products-list.html" class="dark-color active-hover">
    Products table listing
    </a>
    </li>
    <li>
    <a href="products-detail.html" class="dark-color active-hover">
    Product detail page
    </a>
    </li>
    <li>
    <a href="compare.html" class="dark-color active-hover">
    Compare products
    </a>
    </li>
    <li>
    <a href="wishlist.html" class="dark-color active-hover">
    Wishlist page
    </a>
    </li>
    <li>
    <a href="my-account.html" class="dark-color active-hover">
    My account
    </a>
    </li>
    </ul>
    <ul class="mega-menu-list">
    <li>
    <a href="cart.html" class="dark-color active-hover">
    Shopping cart
    </a>
    </li>
    <li>
    <a href="checkout-step-1.html" class="dark-color active-hover">
    Checkout step 1
    </a>
    </li>
    <li>
    <a href="checkout-step-2.html" class="dark-color active-hover">
    Checkout step 2
    </a>
    </li>
    <li>
    <a href="checkout-step-3.html" class="dark-color active-hover">
    Checkout step 3
    </a>
    </li>
    <li>
    <a href="checkout-step-4.html" class="dark-color active-hover">
    Checkout step 4
    </a>
    </li>
    <li>
    <a href="checkout-step-5.html" class="dark-color active-hover">
    Checkout step 5
    </a>
    </li>
    <li>
    <a href="register.html" class="dark-color active-hover">
    Registration
    </a>
    </li>
    </ul>
    </li>
    <li class="mega-menu-box">
    <span class="mega-menu-title active-color clearfix">Common pages</span>
    <ul class="mega-menu-list">
    <li>
    <a href="about-us.html" class="dark-color active-hover">
    About us
    </a>
    </li>
    <li>
    <a href="blog.html" class="dark-color active-hover">
    Blog listing
    </a>
    </li>
    <li>
    <a href="blog-detail.html" class="dark-color active-hover">
    Blog detail
    </a>
    </li>
    <li>
    <a href="contact.html" class="dark-color active-hover">
    Contact us
    </a>
    </li>
    </ul>
    </li>
    </ul>
    </li>
    <li class="light-color active-hover">
    <a href="products-grid.html" class="main-menu-item transition-all">What’s new</a>
    </li>
    <li class="active-color dark-hover">
    <a href="products-list.html" class="main-menu-item transition-all"><i class="icon-star"></i> Sale</a>

    <ul class="mega-menu cream-bg full-width">
    <li class="mega-menu-active cream-gradient"></li>
    <li class="mega-menu-box">
    <span class="mega-menu-title active-color clearfix">Best value</span>
    <ul class="mega-menu-list">
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    Premium Quality products
    </a>
    </li>
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    Conscious – Sustainable Style
    </a>
    </li>
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    New this Spring
    </a>
    </li>
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    New Arrivals Divided
    </a>
    </li>
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    Ladies' Spring Preview
    </a>
    </li>
    <li>
    <a href="products-grid.html" class="dark-color active-hover">
    Gift Of The Week
    </a>
    </li>
    </ul>
    </li>
    <li class="mega-menu-box">
    <span class="mega-menu-title active-color clearfix">This week</span>
    <a href="products-detail.html" title="50% Winter sale" class="mega-menu-banner">
    <img class="with-shadow" src="images/photos/img-menu-teaser2.jpg" alt="50% Winter sale"/>
    <span class="header-font banner-text-white banner-size-1">
    <strong>50%</strong><br/>
    Winter sale
    </span>
    </a>
    </li>
    <li class="mega-menu-box">
    <span class="mega-menu-title active-color clearfix">Inspiration</span>
    <a href="products-detail.html" title="New 2014 collection Zara Lauren" class="mega-menu-banner">
    <img class="with-shadow" src="images/photos/img-menu-teaser3.jpg" alt="New 2014 collection Zara Lauren"/>
    <span class="header-font banner-text-white banner-size-2">
    <strong>
    New 2014<br/>
    collection
    </strong><br/>
    Zara Lauren
    </span>
    </a>
    </li>
    </ul>
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
    <strong>Payment</strong>
    </h3>
    <p class="middle-color">
    Lorem ipsum dolor sit amet, de consectetur adipiscing elit
    </p>
    <a href="#"><img src="images/icons/icon-visa-e.png" alt="Visa Electron"/></a>
    <a href="#"><img src="images/icons/icon-mastercard.png" alt="MasterCard"/></a>
    <a href="#"><img src="images/icons/icon-paypal.png" alt="PayPal"/></a>
    <a href="#"><img src="images/icons/icon-visa.png" alt="Visa"/></a>
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
    </footer>
  </body>
</html>
