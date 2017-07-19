@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<strong class="active-color">Order history</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">

<div class="content-holder grid-100">
  <h3>Confirmed order</h3>
<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
<div class="well-box-middle grid-60 tablet-grid-60">Product name</div>
<div class="well-box-middle align-center grid-10 tablet-grid-10">Quantity</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Unit Price</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Total Price</div>
</div>

<?php if ($data == null ): ?>
<?php foreach ($data as $key => $value): ?>
<div class="cart-product-list well-shadow">
<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="{{asset('/').'/'.$value->images}}" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>{!! $value->name !!}</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">{!! $value->brand !!}</a>
</div>
</div>
</div>
<div class="grid-100 grid-parent margin-bottom clearfix">
<div class="well-box-middle well-border-gradient align-center grid-5 tablet-grid-5">
  <strong class="text-input product-quantity dark-color light-bg">{!! $value->qty !!}</strong>
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>{!! $value->sale !!}.&#36;</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>  {!! ($value->qty)*($value->sale) !!}.&#36;</strong>
</div>
</div>
</div>

</div>
<?php endforeach; ?>
</div>
<div class=" well-shadow well-box last light-bg align-right">
<dl class="cart-total clearfix">
<dt class="uppercase dark-color">Total:</dt>
<dd class="active-color">{!! $value->total_price !!}.00 &#36;</dd>
</dl>
</div>
<?php else: ?>
  <div class="content-holder grid-100">
  <h3>You have no transaction history yet</h3>
</div>
<?php endif; ?>
<div class="content-holder grid-100">
  <h3>Not Confirmed order</h3>
<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
<div class="well-box-middle grid-60 tablet-grid-60">Product name</div>
<div class="well-box-middle align-center grid-10 tablet-grid-10">Quantity</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Unit Price</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Total Price</div>
</div>
<?php if ($data1 == null): ?>
<?php foreach ($data1 as $key => $val): ?>
<div class="cart-product-list well-shadow">
<div class="cart-product well-table light-bg">
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="{{asset('/').'/'.$val->images}}" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-50 tablet-grid-50">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="products-detail.html" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>{!! $val->name !!}</strong></a>
<a href="products-grid.html" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">{!! $val->brand !!}</a>
</div>
</div>
</div>
<div class="grid-100 grid-parent margin-bottom clearfix">
<div class="well-box-middle well-border-gradient align-center grid-5 tablet-grid-5">
  <strong class="text-input product-quantity dark-color light-bg">{!! $val->qty !!}</strong>
</div>
<div class="well-box-middle well-border-gradient align-center grid-15 tablet-grid-15 middle-color">
<strong>{!! $val->sale !!}.&#36;</strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>  {!! ($val->qty)*($val->sale) !!}.&#36;</strong>
</div>
</div>
</div>

</div>
<?php endforeach; ?>
</div>
<div class=" well-shadow well-box last light-bg align-right">
<dl class="cart-total clearfix">
<dt class="uppercase dark-color">Total:</dt>
<dd class="active-color">{!! $val->total_price !!}.00 &#36;</dd>
</dl>
<dl class="cart-total clearfix">
  <a href="order/activation/{!! $val->order_id !!}" class="button-normal button-with-icon light-color active-gradient dark-gradient-hover">
   <span><i class="icon-angle-right"></i></span>Confirmed order
  </a>
</dl>
</div>
<?php else: ?>
  <div class="content-holder grid-100">
    <h3>You have no transaction history yet</h3>
  </div>
<?php endif ?>
</div>
</div>
</section>

@stop
