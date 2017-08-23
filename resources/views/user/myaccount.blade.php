@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<a href="/my-account" class="dark-color active-hover">My account</a>
<strong class="active-color">{!! $users->first_name !!}</strong>
<strong class="active-color {{ $errors->has('update') ? ' has-error' : '' }}">
  @if (session('update'))
  >
    {{ session('update') }}
  @endif
</strong>
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
<li>
<a href="/my-account" class="dark-color active-hover selected">My account</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/user/edit/{!! $users->id !!}" class="dark-color active-hover">Edit account</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/user/password/edit/{!! $users->id !!}" class="dark-color active-hover">Password</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/order-history" class="dark-color active-hover">Order history</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="/logout/" class="dark-color active-hover">Logout</a>
</li>
</ul>
</nav>
</div>
</div>

<div class="content-with-sidebar grid-75">
<div class="with-shadow grid-100 light-bg">
<div class="content-page content-holder grid-100">
<div class="my-profile-header margin-bottom middle-color clearfix">
<div class="my-profile-photo hide-on-mobile hide-on-tablet">
<a href="#">
<img class="with-shadow" style="with:150px;height:150px;" src="{{asset('/').'/'.$users->images}}" alt="Your photo"/>
</a>
</div>
<div class="my-profile-info">
<h1 class="active-color header-font">{!! $users->first_name!!}, <span class="dark-color">welcome to shoppie!</span></h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic </p>
</div>
</div>
<div class="header-slider juicy-wrapper margin-bottom hide-on-mobile">
<ul class="juicy-slider">
<li class="juicy-current">
<img alt="" src="{{asset('/images/photos/img-header-listing.jpg')}}" class="juicy-bg">
<div style="top: 40px; left: 25px" data-show="at:700 effect:shift-fade direction:left speed:1700 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer subheader-font">
We have something
</div>
<div style="top: 70px; left: 25px" data-show="at:1000 effect:shift-fade direction:left speed:1700 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer subheader-font">
Special for you!
</div>
<div style="top: 110px; left: 25px" data-show="at:1300 effect:shift-fade direction:left speed:1700 easing:easeOutQuint" data-hide="effect:slide-fade direction:left speed:800" class="juicy-layer">
<a href="products-detail.html">Click here for more info</a>
</div>
</li>
</ul>
</div>
<h2 class="dark-color subheader-font">My account</h2>
<ul class="grid-50 tablet-grid-50">
<li class="middle-color">
<a href="/user/edit/{!! $users->id !!}" class="middle-color dark-hover">Edit your account information</a>
</li>
<li class="middle-color">
<a href="/user/password/edit/{!! $users->id !!}" class="middle-color dark-hover">Change your password</a>
</li>
</ul>
<div class="clear margin-bottom"></div>
<h2 class="dark-color subheader-font">My orders</h2>
<ul class="grid-50 tablet-grid-50">
<li class="middle-color">
<a href="/order-history" class="middle-color dark-hover">View your order history</a>
</li>
<!-- <div class="clear margin-bottom"></div>
<h2 class="dark-color subheader-font">Newsletter</h2>
<ul class="grid-100">
<li class="middle-color">
<a href="my-account.html" class="middle-color dark-hover">Subscribe / Unsubscribe to newsletter</a>
</li> -->
</ul>
</div>
</div>
</div>
</div>
</section>
@stop
