@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<a href="/contact" class="dark-color active-hover">Contact</a>
<strong class="active-color {{ $errors->has('contact') ? ' has-error' : '' }}">
@if (session('contact'))
  {{ session('contact') }}
@endif
</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-100"></div>
<div class="content-with-sidebar grid-100">
<div class="with-shadow grid-100 light-bg">
<div class="content-page grid-100">
<h1 class="active-color header-font with-border full">Contact</h1>
<div class="contact-map margin-bottom">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1126226032093!2d108.20907749999999!3d16.0596445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b402a3c045%3A0xd51c5e6400ce4917!2zMTc5IE5ndXnhu4VuIFbEg24gTGluaCwgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1439088907429" width="900" height="450" frameborder="0" style="border:1px solid" allowfullscreen></iframe>
</div>
<p class="margin-bottom">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
</p>
<div class="contact-addresses clearfix">
<div class="pin-to-map grid-33 tablet-grid-33 first">
<a class="address-title subheader-font active-color">Bratislava</a>
<div class="street">Brigádnická 27</div>
<div class="city">841 10 Bratislava</div>
<div class="country">Slovakia</div>
<div class="other">
email: ba@shoppie.com<br/>
phone: +425 555 555
</div>
</div>
<div class="pin-to-map grid-33 tablet-grid-33">
<a class="address-title subheader-font active-color">Nitra</a>
<div class="street">Piaristická 1375/21</div>
<div class="city">949 01 Nitra</div>
<div class="country">Slovakia</div>
<div class="other">
email: nr@shoppie.com<br/>
phone: +425 555 555
</div>
</div>
<div class="pin-to-map grid-33 tablet-grid-33 last">
<a class="address-title subheader-font active-color">Veľký Krtíš</a>
<div class="street">Za parkom 22</div>
<div class="city">990 01 Veľký Krtíš</div>
<div class="country">Slovakia</div>
<div class="other">
email: vk@shoppie.com<br/>
phone: +425 555 555
</div>
</div>
</div>
<div class="contact-addresses clearfix">
<div class="pin-to-map grid-33 tablet-grid-33 first" data-address="Laborfalvi Róza utca 17, 1041 Budapest, Hungary" data-zoom="14">
<a class="address-title subheader-font active-color">Budapest</a>
<div class="street">Eötvös utca 139</div>
<div class="city">1153 Budapest</div>
<div class="country">Hungary</div>
<div class="other">
email: bp@shoppie.com<br/>
phone: +425 555 555
</div>
</div>
<div class="pin-to-map grid-33 tablet-grid-33" data-latlng="49.202906, 16.582954" data-zoom="16">
<a class="address-title subheader-font active-color">Brno</a>
<div class="street">Soukopova 13</div>
<div class="city">602 00 Brno</div>
<div class="country">Czech Republic</div>
<div class="other">
email: br@shoppie.com<br/>
phone: +425 555 555
</div>
</div>
<div class="pin-to-map grid-33 tablet-grid-33 last">
<a class="address-title subheader-font active-color">Wien</a>
<div class="street">Margaretenstraße 50</div>
<div class="city">1040 Wien</div>
<div class="country">Austria</div>
<div class="other">
email: wi@shoppie.com<br/>
phone: +425 555 555
</div>
</div>
</div>
<hr/>
<h2 class="bigger-header with-border subheader-font">
Contact form
</h2>
<form class="content-form margin-bottom" action="/send-contact" method="post">
  {{ csrf_field() }}
<div class="form-input">
<label for="name" class="middle-color">Name and Surname</label>
<input type="text" class=" text-input dark-color light-bg" name="name" id="name" value=""  placeholder="Name and Surname Customer" required/>
</div>
<div class="form-input">
<label for="email_customer" class="middle-color">E-mail Customer</label>
<input type="email" class=" text-input dark-color light-bg" name="email_customer" id="email_customer" value="" placeholder="E-mail Customer" required/>
</div>
<div class="form-input">
<label for="phone" class="middle-color">Phone Customer</label>
<input type="text" class=" text-input dark-color light-bg" name="phone_customer" id="phone" placeholder="Phone Customer" value="" required/>
</div>
<div class="form-input">
<label for="email" class="middle-color">E-mail shop</label>
<input type="email" class=" text-input dark-color light-bg" name="email" id="email" value="" placeholder="E-mail shop" required/>
</div>
<div class="form-input">
<label for="location" class="middle-color">Shop location</label>
<input type="text" class=" text-input dark-color light-bg" name="location" id="location" value="" placeholder="Shop Location" required/>
</div>
<div class="form-input">
<label for="message" class="middle-color">Message</label>
<textarea class=" textarea-input dark-color light-bg" name="message" id="message"></textarea>
</div>
<div class="form-submit">
<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">Send message</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
@stop
