@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="../../home" class="dark-color active-hover">Home</a>
<a href="../../product/{name}" class="dark-color active-hover">Products</a>
<strong class="active-color">Products Details</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar grid-25 cream-gradient transition-all" id="sidebar-mobile">



<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">What's News</h2>
<ul class="sidebar-list">
<?php foreach ($news as $key => $v_l): ?>

<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
{!! $v_l['name'] !!}
</span>
<!-- <img src="{{asset('/').'/'.$v_l['images']}}" alt="Pablo Coelho jacket"/> -->
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
</div>
</li>
</ul>
</li>
<?php endforeach; ?>
</ul>
</div>
<div class="sidebar-box sidebar-bottom cream-gradient">
<h2 class="header-font active-color">Newsletters signup</h2>
<form method="POST" action="http://adamantium.sk/shoppie/html/homepage.html">
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<li>
Lorem Ipsum is simply dummy text of the printing and typesetting
</li>
<li>
<input type="text" name="email" class="text-input input-no-margin dark-color light-bg" placeholder="Enter your email...">
</li>
<li class="align-center">
<button type="submit" class="button-small light-color middle-gradient dark-gradient-hover">Subscribe</button>
</li>
</ul>
</form>
</div>
</div>

<div class="content-with-sidebar grid-75">
<div class="product-detail-shadow">
<div class="product-detail cream-gradient grid-container">
  <div class="ribbon-small ribbon-green">
  <div class="ribbon-inner">
  <span class="ribbon-text">Top rated</span>
  <span class="ribbon-aligner"></span>
  </div>
  </div>

<div class="product-images grid-40 tablet-grid-40 juicy-wrapper">
<ul id="product-gallery" class="juicy-slider middle-border">
<li>
<a href="images/photos/product-detail-1-big.jpg" class="fancybox" target="_blank">
<img class="juicy-bg" src="{{asset('/').'/'.$products->images}}" data-thumb="images/photos/product-detail-1-thumb.jpg" alt=""/>
</a>
</li>
</ul>
<div class="juicy-slider-nav juicy-thumbs middle-border dark-border-hover active-border-selected" data-type="thumbs"></div>
</div>

<div class="product-info grid-55 tablet-grid-55">
<h1 class="header-font dark-color">{!! $products->name !!}</h1>
<div class="clearfix">
<div class="product-stars grid-50 tablet-grid-50 voting-stars stars-big">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-social grid-50 tablet-grid-50 hide-on-mobile">
<a href="https://www.facebook.com/adamantium.solutions" class="dark-hover facebook-color transition-color" target="_blank">
<i class="icon-facebook-sign"></i>
</a>
<a href="https://twitter.com/AdamantiumSol" class="dark-hover twitter-color transition-color" target="_blank">
<i class="icon-twitter"></i>
</a>
<a href="http://pinterest.com/" class="dark-hover pinterest-color transition-color" target="_blank">
<i class="icon-pinterest-sign"></i>
</a>
<a href="https://plus.google.com/u/0/113332714808714572645/posts" class="dark-hover google-color transition-color" target="_blank">
<i class="icon-google-plus-sign"></i>
</a>
</div>
</div>
<p class="product-perex">
{!! $products->intro_short !!}
</p>
<div class="product-meta-price clearfix">
<div class="product-meta middle-color grid-55">
<table>
<tr>
<td>Brand:</td>
<td>{!! $products->brand !!}</td>
</tr>
</table>
</div>
<div class="product-price active-color grid-45">
<del class="middle-color">{!! $products->price !!}</del>
<strong>{!! $products->sale !!}</strong>
</div>
</div>
<form action="http://adamantium.sk/shoppie/html/cart.html" method="POST">
<div class="product-options clearfix">
<label for="product-size" class="dark-color hide-on-mobile">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size" id="product-size">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
<label for="product-color" class="dark-color hide-on-mobile">Color</label>
<div class="product-color custom-selectbox dark-color light-gradient active-hover">
<select name="product-color" id="product-color">
<option value="Brown">Brown</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
<option value="Yellow">Yellow</option>
<option value="Magenta" selected="selected">Magenta</option>
<option value="Cyan">Cyan</option>
<option value="Black">Black</option>
<option value="White">White</option>
<option value="Red">Red</option>
</select>
</div>
</div>
<div class="product-options clearfix">
<label for="product-quantity" class="hide-on-mobile">Quantity</label>
<input type="text" id="product-quantity" name="product-quantity" class="product-quantity text-input dark-color light-bg" value="1" onclick="$(this).select()">
<div class="button-dual light-color transition-all">
<button type="submit" class="button-dual-left middle-gradient dark-gradient-hover">
Add to cart <i class="icon-shopping-cart"></i>
</button>
</div>
</div>
</form>
</div>
</div>

<div class="product-detail-tabs grid-100 light-bg">
<div class="page-tabs shoppie-tabs">
<h2 class="header-font">
<a class="middle-color active-hover light-bg transition-color" href="#tab-description">
<span class="hide-on-mobile">Description</span>
<i class="icon-align-left hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="middle-color active-hover light-bg transition-color" href="#tab-reviews">
<span class="hide-on-mobile">Reviews</span>
<i class="icon-comments hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="middle-color active-hover light-bg transition-color" href="#tab-related">
<span class="hide-on-mobile">Related products</span>
<i class="icon-link hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
</div>
<div class="page-tabs-holder">
<div class="page-tab grid-100" id="tab-reviews">
<hr class="margin-bottom"/>
<div class="grid-100 product-review">
<div class="product-review-author middle-color">
<strong class="dark-color">{!! $products->brand !!}</strong>
| <small>{!! $products->updated_at !!}</small> |
<span class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</span>
</div>
<p>{!! $products->detail !!}</p>
<div class="product-review-details clearfix">
<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-score">
<strong class="product-review-percent active-color">83%</strong>
<div class="voting-stars stars-huge">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<span class="middle-color">
Based on <strong class="dark-color">1125</strong> reviews
</span>
</div>
<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-stats">
<dl>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">1028</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">28</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">17</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">39</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">12</strong>
customers
</dd>
</dl>
</div>
<!-- <div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-count">
<table>
<tr>
<td>
<strong class="active-color">158</strong>
</td>
<td>of customers recommends</td>
</tr>
<tr>
<td>
<strong class="active-color">2756</strong>
</td>
<td>customers already purchased</td>
</tr>
</table>
<a class="button-small light-color middle-gradient dark-gradient-hover" href="#">
Write a review
</a>
</div> -->
</div>
<div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
<a class="pager-page" href="#"><i class="icon-double-angle-left"></i></a>
<a class="pager-page" href="#"><i class="icon-angle-left"></i></a>
<a class="pager-page" href="#">1</a>
<a class="pager-page selected" href="#">2</a>
<a class="pager-page" href="#">3</a>
<a class="pager-page hide-on-mobile" href="#">4</a>
....
<a class="pager-page" href="#">29</a>
<a class="pager-page" href="#"><i class="icon-angle-right"></i></a>
<a class="pager-page" href="#"><i class="icon-double-angle-right"></i></a>
</div>
</div>
</div>

<div class="page-tab grid-100 clearfix" id="tab-related">
  <?php foreach ($product_list as $key => $p_l): ?>
<div class="grid-25 tablet-grid-25">
<div class="product-box light-bg transition-all">
<a class="product-img" href="../../product/detail/{!! $p_l['id'] !!}">
<span><img src="{{asset('/').'/'.$p_l['images']}}" alt="Pablo Coelho jacket"/></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="../../product/detail/{!! $p_l['id'] !!}" class="dark-color active-hover">
<strong>{!! $p_l['name'] !!}</strong>
</a>
</h3>
<a href="products-grid.html" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $p_l['price'] !!}</del>
<strong class="middle-border">{!! $p_l['sale'] !!}</strong>
</div>
</div>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@stop
