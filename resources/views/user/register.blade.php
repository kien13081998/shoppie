@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<strong class="active-color">Register account</strong>
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
<a href="register.html" class="dark-color active-hover selected">Register account</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="forgotten.html" class="dark-color active-hover">Forgotten password</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">My account</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="wishlist.html" class="dark-color active-hover">Wish list</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Order history</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Downloads</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Returns</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Transactions</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="my-account.html" class="dark-color active-hover">Newsletter</a>
</li>
</ul>
</nav>
</div>
</div>

<div class="content-with-sidebar grid-75">
<p>If you already have an account with us, please login at the <a href="log-in.html" class="active-color dark-hover"><strong>login page</strong></a></p>
<form class="content-form margin-bottom" action="#" method="POST">
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your personal details
</h2>
<div class="form-input">
<label for="first_name" class="middle-color">First name <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="first_name" id="first_name" value=""/>
</div>
<div class="form-input">
<label for="last_name" class="middle-color">Last name <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="last_name" id="last_name" value=""/>
</div>
<div class="form-input">
<label for="email" class="middle-color">E-mail <span class="active-color">*</span></label>
<input type="email" class="text-input dark-color light-bg" name="email" id="email" value=""/>
</div>
<div class="form-input">
<label for="phone" class="middle-color">Telephone <span class="active-color">*</span></label>
<input type="tel" class="text-input dark-color light-bg" name="phone" id="phone" value=""/>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your adress
</h2>
<div class="form-input">
<label for="street" class="middle-color">Street <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="street" id="street" value=""/>
</div>
<div class="form-input">
<label for="city" class="middle-color">City <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg" name="city" id="city" value=""/>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your password
</h2>
<div class="form-input">
<label for="password" class="middle-color">Password <span class="active-color">*</span></label>
<input type="password" class="text-input dark-color light-bg" name="password" id="password" value=""/>
</div>
<div class="form-input">
<label for="confirm_password" class="middle-color">Confirm password <span class="active-color">*</span></label>
<input type="password" class="text-input dark-color light-bg" name="confirm_password" id="confirm_password" value=""/>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Newsletter
</h2>
</div>
</div>
<p class="align-center middle-color">I have read and agree to the <a href="#" class="active-color dark-hover"><strong>Privacy Policy</strong></a></p>
<div class="form-submit">
<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">Create new account</button>
</div>
</form>
</div>
</div>
</section>
@stop
