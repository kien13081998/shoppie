@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<strong class="active-color">Contact</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-100"></div>
<div class="content-with-sidebar grid-100">
<div class="with-shadow grid-100 light-bg">
<div class="content-page grid-100">
<h1 class="active-color header-font with-border full">Contact</h1>
<div class="contact-map margin-bottom">
<div id="map-canvas" data-latlng="48.482203, 18.180687" data-zoom="7"></div>
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
<form class="content-form margin-bottom" action="{!! route('send-contact') !!}" method="post">
  {{ csrf_field() }}
<div class="form-input">
<label for="name" class="middle-color">Name and Surname</label>
<input type="text" class="name text-input dark-color light-bg" name="name" id="name" value=""/>
</div>
<div class="form-input">
<label for="email" class="middle-color">E-mail</label>
<input type="email" class="email text-input dark-color light-bg" name="email" id="email" value=""/>
</div>
<div class="form-input">
<label for="location" class="middle-color">Shop location</label>
<input type="text" class="location text-input dark-color light-bg" name="location" id="location" value=""/>
</div>
<div class="form-input">
<label for="message" class="middle-color">Message</label>
<textarea class="message textarea-input dark-color light-bg" name="message" id="message"></textarea>
</div>
<div class="form-submit">
<button type="submit" class="sendmessage button-normal uppercase light-color middle-gradient dark-gradient-hover">Send message</button>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

@stop
