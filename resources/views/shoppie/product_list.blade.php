@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="../../home" class="dark-color active-hover">Home</a>
<strong class="active-color">{!! $categories->name !!}</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>
<div class="sidebar cream-gradient grid-25 transition-all" id="sidebar-mobile">
<h2 class="header-font active-color">News</h2>
<ul class="sidebar-list">
  <?php foreach ($news as $va): ?>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="../../news/detail/{!! $va['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $va['name'] !!}
<strong class="active-color">{!! $va['price'] !!}</strong>
</span>
<img src="{{asset('/').'/'.$va['images']}}"  style="height:45px;" alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="clearfix">
<div class="product-popup-top">
<a href="/product/detail/{!! $va['id'] !!}">
<img src="{{asset('/').'/'.$va['images']}}" alt="Buy Pablo Coelho Jacket">
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
<img class="juicy-bg" src="{{asset('images/photos/img-header-listing.jpg')}}" alt=""/>
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
<div class="grid-100">
  <?php foreach ($products as $key => $value): ?>

<div class="product-wide light-bg clearfix">
<div class="grid-15 tablet-grid-20 mobile-grid-35 product-img-holder">
<a class="product-img" href="/product/detail/{!! $value['id']!!}">
<img src="{{asset('/').'/'.$value['images']}}" alt="Pablo Coelho jacket"/>
</a>
</div>
<div class="grid-50 tablet-grid-45 mobile-grid-65 product-description">
<h3 class="product-title subheader-font">
<a href="/product/detail/{!! $value['id']!!}" class="dark-color active-hover">
<strong>{!! $value['name'] !!}</strong>
</a>
</h3>
<a href="" class="product-category middle-color dark-hover">Product for {!!$categories->name!!}</a>
<p class="dark-color hide-on-mobile">{!! $value['intro_short'] !!}</p>
</div>
<div class="grid-35 tablet-grid-35 hide-on-mobile product-actions">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $value['price'] !!}</del>
<strong>{!! $value['sale'] !!}</strong>
</div>
<div class="clear"></div>
<div class="button-dual light-color transition-all">
<a href="cart.html" class="button-dual-left middle-gradient dark-gradient-hover addcart" data-pid="{!! $value['id']!!}" data-price="{!!$value['price']!!}">
Add to cart <i class="icon-shopping-cart"></i>
</a>
<a class="button-dual-right middle-gradient dark-gradient-hover">
<i class="icon-angle-down"></i>
</a>
{{ csrf_field() }}
<!-- <ul class="button-dual-submenu">
<li>
<a href="wishlist.html" class="light-color middle-bg dark-bg-hover transition-color">
Add to favorites
<i class="icon-heart"></i>
</a>
</li>
<li>
<a href="compare.html" class="dual-submenu-last light-color middle-bg dark-bg-hover transition-color">
Add to compare
<i class="icon-signal"></i>
</a>
</li>
</ul> -->
</div>
</div>
</div>
<?php endforeach; ?>

</div>
<div class="grid-100">
<a class="button-block middle-color dark-hover light-bg middle-border" onclick="Products.loadMoreProducts($(this).parent(), this, 3); return false" href="components/productsContentWide.html">
<strong>Load more clothes</strong> &nbsp; <i class="icon-repeat"></i>
</a>
</div>
</div>
</div>
</section>
@stop
