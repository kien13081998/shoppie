@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<strong class="active-color">Shopping cart</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">

<div class="content-holder grid-100">
<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
<div class="well-box-middle grid-60 tablet-grid-60">Product name</div>
<div class="well-box-middle align-center grid-10 tablet-grid-10">Quantity</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Unit Price</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Total Price</div>
</div>
<div class="cart-product-list well-shadow">
  <?php
   echo "<pre>";
   print_r($data);
   echo "</pre>";
   ?>
<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="images/photos/img-cart-dummy.jpg" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>Tommy Mancini</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">Women’s Suit Jacket</a>
</div>
<div class="cart-product-options">
<label for="product-color1" class="dark-color">Color</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-color[]" id="product-color1">
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
<label for="product-size1" class="dark-color">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size[]" id="product-size1">
<option value="XS">XS</option>
<option value="S">S</option>
<option value="M">M</option>
<option value="L">L</option>
<option value="XL" selected="selected">XL</option>
<option value="XXL">XXL</option>
</select>
</div>
</div>
</div>
</div>
<div class="grid-100 grid-parent margin-bottom clearfix">
<div class="well-box-middle well-border-gradient align-center grid-10 tablet-grid-10">
<input type="text" name="product-quantity[]" class="text-input product-quantity dark-color light-bg" value="3" onclick="$(this).select()">
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>85,40 €</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>256,20 €</strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="#"><span class="cancel"></span></a>
</div>
</div>

</div>
</div>
<div class=" well-shadow well-box last light-bg align-right">
<dl class="cart-sub-total middle-color clearfix">
<dt class="uppercase">Sub total:</dt>
<dd>1 600,00 &euro;</dd>
<dt class="uppercase">Eco tax (-8,00):</dt>
<dd>8,00 &euro;</dd>
<dt class="uppercase">Vatt (10,0 %):</dt>
<dd>100,00 &euro;</dd>
</dl>
<dl class="cart-total clearfix">
<dt class="uppercase dark-color">Total:</dt>
<dd class="active-color">1 708,00 &euro;</dd>
</dl>
<a href="" class="shoppingcart button-normal button-with-icon light-color active-gradient dark-gradient-hover">
Proceed to checkout <span><i class="icon-angle-right"></i></span>
</a>
</div>
</div>
</div>
</section>

@stop
