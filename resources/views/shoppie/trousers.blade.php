@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<a href="/trousers" class="dark-color active-hover">trousers</a>
<strong class="active-color">New trousers Updated</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar grid-25 cream-gradient transition-all" id="sidebar-mobile">

<div class="sidebar-box sidebar-top cream-gradient">
<nav class="submenu">
<ul class="expandable-menu">
<li class="align-right back">
<a href="#sidebar-mobile" class="dark-color active-hover click-slide"><i class="icon-chevron-right"></i></a>
</li>
<li class="expanded">
<a href="/product/WOMEN" class="dark-color active-hover selected">Women</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/product/MEN" class="dark-color active-hover">Men</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/product/KID" class="dark-color active-hover">Kids</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/trousers" class="dark-color active-hover">trousers</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/trousers" class="dark-color active-hover">Trousers</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/news" class="dark-color active-hover">What’s new</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/sale" class="dark-color active-hover">Sale</a>
</li>
</ul>
</nav>
</div>

<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">Coats Products</h2>
<ul class="sidebar-list">
  <?php foreach ($products_coats as $key => $coats): ?>

<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="/product/detail/{!! $coats['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $coats['name']!!}
<strong class="active-color">{!! $coats['price']!!}</strong>
</span>
<img src="{{asset('/').'/'.$coats['images']}}" style="height:25px;" alt="Pablo Coelho jacket"/>
</a>
</li>
<?php endforeach; ?>

</ul>
</div>

<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">New News</h2>
<ul class="sidebar-list">
  <?php foreach ($news as $key => $news_p): ?>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="/news/detail/{!! $news_p['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $news_p['name'] !!}
</span>
</a>
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

<div class="content-with-sidebar grid-75 grid-parent">

<div class="grid-100 margin-bottom hide-on-mobile">
<div class="header-slider juicy-wrapper">
<ul class="juicy-slider">
<li>
<img class="juicy-bg" src="images/photos/img-header-listing.jpg" alt=""/>
<div style="top: 50px; left: 30px" data-show="at:700 effect:shift-fade direction:left speed:2000 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer subheader-font">
Jackets & Coats
</div>
<div style="top: 80px; left: 30px" data-show="at:1000 effect:shift-fade direction:left speed:2000 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer subheader-font">
Spring collection
</div>
</li>
</ul>
</div>
</div>
<?php foreach ($trousers_list as $key => $trousers): ?>
<div class="grid-100">
<div class="product-wide light-bg clearfix">
<div class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">Sale off</span>
<span class="ribbon-aligner"></span>
</div>
</div>
<div class="grid-15 tablet-grid-20 mobile-grid-35 tablet-grid-20 product-img-holder">
<a class="product-img" href="/product/detail/{!! $trousers['id'] !!}">
<img src="{{asset('/').'/'.$trousers['images']}}" alt="Pablo Coelho jacket"/>
</a>
</div>
<div class="grid-50 tablet-grid-45 mobile-grid-65 product-description">
<h3 class="product-title subheader-font">
<a href="/product/detail/{!! $trousers['id'] !!}" class="dark-color active-hover">
<strong>{!! $trousers['name'] !!}</strong>
</a>
</h3>
<a href="/product/detail/{!! $trousers['id'] !!}" class="product-category middle-color dark-hover">{!! $trousers->name !!}’s Suit Jacket</a>
<p class="dark-color hide-on-mobile">{!! $trousers['intro_short'] !!}</p>
</div>
<div class="grid-35 tablet-grid-35 hide-on-mobile product-actions">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $trousers['price'] !!}</del>
<strong>{!! $trousers['sale'] !!}</strong>
</div>
<div class="clear"></div>
@if(Session::get('id'))
<div class="button-dual light-color transition-all">
<a href="cart" class=" addcart button-dual-left middle-gradient dark-gradient-hover" data-pid="{!! $trousers['id']!!}" data-uid="Session::get('id')" data-price="{!! $trousers['sale'] !!}">
Add to cart <i class="icon-shopping-cart"></i>
</a>
<a class="button-dual-right middle-gradient dark-gradient-hover">
<i class="icon-angle-down"></i>
</a>
</div>
@else
<div class="button-dual light-color transition-all">
<a href="/user/login" class="button-dual-left middle-gradient dark-gradient-hover">
Login To By<i class="icon-shopping-cart"></i>
</a>
<a class="button-dual-right middle-gradient dark-gradient-hover">
<i class="icon-angle-down"></i>
</a>
</div>
@endif
</div>
</div>
</div>
<?php endforeach; ?>
<div class="grid-100">
  <div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
{{ $trousers_list->links() }}
  </div>
<a class="button-block middle-color dark-hover light-bg middle-border" onclick="Products.loadMoreProducts($(this).parent(), this, 3); return false" href="components/productsContentWide.html">
<strong>Load more clothes</strong> &nbsp; <i class="icon-repeat"></i>
</a>
</div>
</div>

</div>
</section>
@stop
