@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<a href="blog.html" class="dark-color active-hover">Blog</a>
<a href="blog.html" class="dark-color active-hover">New collections</a>
<strong class="active-color">Summer</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar cream-gradient grid-25 transition-all" id="sidebar-mobile">

<div class="sidebar-box sidebar-top cream-gradient">
<nav class="submenu">
<ul class="expandable-menu">
<li class="align-right back">
<a href="#sidebar-mobile" class="dark-color active-hover click-slide"><i class="icon-chevron-right"></i></a>
</li>
<li class="expanded">
<a href="blog.html" class="dark-color active-hover selected">New collections</a>
<ul>
<li>
<a href="blog.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Spring <small class="middle-color">(12)</small></a>
</li>
<li>
<a href="blog.html" class="dark-color active-hover selected"><b class="middle-color">&rsaquo;</b> Summer <small class="middle-color">(22)</small></a>
</li>
<li>
<a href="blog.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Autumn <small class="middle-color">(18)</small></a>
</li>
<li>
<a href="blog.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Winter <small class="middle-color">(16)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="blog.html" class="dark-color active-hover">Clothes & accessories</a>
<ul>
<li>
<a href="blog.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Clothes <small class="middle-color">(17)</small></a>
</li>
<li>
<a href="blog.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(25)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="blog.html" class="dark-color active-hover">Fashion trends</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="blog.html" class="dark-color active-hover">Haircuts & hairstyles</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="blog.html" class="dark-color active-hover">Make-up & beauty</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="blog.html" class="dark-color active-hover">Pictures</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="blog.html" class="dark-color active-hover">Shoes</a>
</li>
</ul>
</nav>
</div>

<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">You have visited</h2>
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
Pablo Coelho jacket
<strong class="active-color">125,90 €</strong>
</span>
<img src="images/photos/visited-item-1.jpg" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">Top rated</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.html">
<img src="images/photos/img-product1.jpg" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.html"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>

<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
Pablo Coelho jacket
<strong class="active-color">125,90 €</strong>
</span>
<img src="images/photos/visited-item-2.jpg" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-yellow">
<div class="ribbon-inner">
<span class="ribbon-text">Favourite</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.html">
<img src="images/photos/img-product2.jpg" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.html"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>

<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
Pablo Coelho jacket
<strong class="active-color">125,90 €</strong>
</span>
<img src="images/photos/visited-item-3.jpg" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-blue">
<div class="ribbon-inner">
<span class="ribbon-text">New</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.html">
<img src="images/photos/img-product3.jpg" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.html"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>

<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
</ul>
</div>

<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">The other bought</h2>
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
10 min. ago
<small class="middle-color">bought by Martina Praha 10</small>
</span>
<img src="images/photos/visited-item-1.jpg" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-blue">
<div class="ribbon-inner">
<span class="ribbon-text">10% Off</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.html">
<img src="images/photos/img-product1.jpg" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.html"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>

<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
58 min. ago
<small class="middle-color">bought by Jana Bratislava</small>
</span>
<img src="images/photos/visited-item-2.jpg" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">Top</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.html">
<img src="images/photos/img-product2.jpg" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.html"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>

<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
1 hour ago
<small class="middle-color">bought by Jarmila Praha 14</small>
</span>
<img src="images/photos/visited-item-3.jpg" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-red">
<div class="ribbon-inner">
<span class="ribbon-text">Favourite</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.html">
<img src="images/photos/img-product3.jpg" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.html"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>

<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
</ul>
</div>
</div>

<div class="content-with-sidebar grid-75">
<div class="with-shadow grid-100 light-bg">
<div class="content-page grid-100">
<h1 class="active-color header-font with-border full">Summer</h1>
<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="blog-detail.html" class="thumbnail light-bg">
<img src="images/photos/img-bloglist-1.jpg" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="blog-detail.html" class="dark-color active-hover subheader-font">
Zara Lauren brings the Summer Collection 2013
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
Quisque a justo magna. Curabitur nec dui non massa tempor dictum. Pellentesque leo lacus, venenatis quis rhoncus eu, vulputate sed ante. Mauris mattis tempus velit vel lacinia. Suspendisse faucibus, erat ut gravida rhoncus, sapien eros ullamcorper felis, et cursus purus magna id mi.
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">April 02, 2012 </a> |
<a class="middle-color dark-hover" href="blog-detail.html">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<hr class="margin-bottom"/>
<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="blog-detail.html" class="thumbnail light-bg">
<img src="images/photos/img-bloglist-2.jpg" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="blog-detail.html" class="dark-color active-hover subheader-font">
Tommy Mancini brings the Summer Collection 2013
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
Quisque a justo magna. Curabitur nec dui non massa tempor dictum. Pellentesque leo lacus, venenatis quis rhoncus eu, vulputate sed ante. Mauris mattis tempus velit vel lacinia. Suspendisse faucibus, erat ut gravida rhoncus, sapien eros ullamcorper felis, et cursus purus magna id mi.
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">April 02, 2012 </a> |
<a class="middle-color dark-hover" href="blog-detail.html">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<hr class="margin-bottom"/>
<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="blog-detail.html" class="thumbnail light-bg">
<img src="images/photos/img-bloglist-3.jpg" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="blog-detail.html" class="dark-color active-hover subheader-font">
Zara Lauren brings the Summer Collection 2013
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
Quisque a justo magna. Curabitur nec dui non massa tempor dictum. Pellentesque leo lacus, venenatis quis rhoncus eu, vulputate sed ante. Mauris mattis tempus velit vel lacinia. Suspendisse faucibus, erat ut gravida rhoncus, sapien eros ullamcorper felis, et cursus purus magna id mi.
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">April 02, 2012 </a> |
<a class="middle-color dark-hover" href="blog-detail.html">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<hr class="margin-bottom"/>
<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="blog-detail.html" class="thumbnail light-bg">
<img src="images/photos/img-bloglist-4.jpg" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="blog-detail.html" class="dark-color active-hover subheader-font">
Zara Lauren brings the Summer Collection 2013
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
Quisque a justo magna. Curabitur nec dui non massa tempor dictum. Pellentesque leo lacus, venenatis quis rhoncus eu, vulputate sed ante. Mauris mattis tempus velit vel lacinia. Suspendisse faucibus, erat ut gravida rhoncus, sapien eros ullamcorper felis, et cursus purus magna id mi.
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">April 02, 2012 </a> |
<a class="middle-color dark-hover" href="blog-detail.html">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<hr class="margin-bottom"/>
<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="blog-detail.html" class="thumbnail light-bg">
<img src="images/photos/img-bloglist-5.jpg" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="blog-detail.html" class="dark-color active-hover subheader-font">
Zara Lauren brings the Summer Collection 2013
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
Quisque a justo magna. Curabitur nec dui non massa tempor dictum. Pellentesque leo lacus, venenatis quis rhoncus eu, vulputate sed ante. Mauris mattis tempus velit vel lacinia. Suspendisse faucibus, erat ut gravida rhoncus, sapien eros ullamcorper felis, et cursus purus magna id mi.
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">April 02, 2012 </a> |
<a class="middle-color dark-hover" href="blog-detail.html">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<hr class="margin-bottom"/>
<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="blog-detail.html" class="thumbnail light-bg">
<img src="images/photos/img-bloglist-1.jpg" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="blog-detail.html" class="dark-color active-hover subheader-font">
Zara Lauren brings the Summer Collection 2013
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
Quisque a justo magna. Curabitur nec dui non massa tempor dictum. Pellentesque leo lacus, venenatis quis rhoncus eu, vulputate sed ante. Mauris mattis tempus velit vel lacinia. Suspendisse faucibus, erat ut gravida rhoncus, sapien eros ullamcorper felis, et cursus purus magna id mi.
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">April 02, 2012 </a> |
<a class="middle-color dark-hover" href="blog-detail.html">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@stop
