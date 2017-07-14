@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<strong class="active-color">New Products Updated</strong>
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
<a href="/product/WOMEN" class="dark-color active-hover">Women</a>
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
<a href="/shoes" class="dark-color active-hover">Shoes</a>
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
<h2 class="header-font active-color">news new</h2>
<ul class="sidebar-list">
  <?php foreach ($news as $key => $value): ?>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="/news/detail/{!! $value['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $value['name'] !!}
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
<img class="juicy-bg" src="{{asset('images/photos/img-header-listing.jpg')}}" alt=""/>
<div style="top: 50px; left: 30px" data-show="at:700 effect:shift-fade direction:left speed:2000 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer subheader-font">
Young generation
</div>
<div style="top: 80px; left: 30px" data-show="at:1000 effect:shift-fade direction:left speed:2000 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer subheader-font">
Collection 2013
</div>
</li>
</ul>
</div>
</div>
<?php foreach ( $products as $key => $v_p): ?>
<div class="grid-33 tablet-grid-50">
<div class="product-box light-bg">
  <div class="ribbon-small ribbon-green">
  <div class="ribbon-inner">
  <span class="ribbon-text">Sale off</span>
  <span class="ribbon-aligner"></span>
  </div>
  </div>
<a class="product-img" href="/product/detail/{!! $v_p['id'] !!}">
<span><img src="{{asset('/').'/'.$v_p['images']}}" alt="Pablo Coelho jacket"/></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="/product/detail/{!! $v_p['id']!!}" class="dark-color active-hover">
<strong>{!! $v_p['name']!!}</strong>
</a>
</h3>
<a href="/product/detail/{!! $v_p['id']!!}" class="product-category middle-color dark-hover">{{ $v_p->categories->name }}’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $v_p['price'] !!}.&#36;</del>
<strong>{!! $v_p['sale'] !!}.&#36;</strong>
</div>
<div class="clear"></div>
<div class="button-dual light-color transition-all">
  {{ csrf_field() }}
<a href="cart" class=" addshopcart button-dual-left middle-gradient dark-gradient-hover" data-pid="{!! $v_p['id']!!}" data-uid="Session::get('id')" data-price="{!! $v_p['sale'] !!}">
Add to cart <i class="icon-shopping-cart"></i>
</a>
<a class="button-dual-right middle-gradient dark-gradient-hover">
<i class="icon-angle-down"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<?php endforeach; ?>
<div class="grid-100 clear-before">
<a class="button-block middle-color dark-hover light-bg middle-border" onclick="Products.loadMoreProducts($(this).parent(), this, 3); return false" href="components/productsContent.html">
<strong>Load more clothes</strong> &nbsp; <i class="icon-repeat"></i>
</a>
</div>
</div>
<div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
</div>
</div>
</section>
@stop
