@extends('layouts.layout')
@section('content')
<section class="page-content" id="compare-container">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<strong class="active-color">sale</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="content-holder grid-100 grid-parent clearfix">
<?php foreach ($sale as $key => $val_sale): ?>
<div class="grid-25 tablet-grid-25 margin-bottom">
<div class="with-shadow light-bg">
<div class="compare-column compare-item">
<div class="compare-row compare-image">
<a href="/product/detail/{!! $val_sale['id'] !!}" title="Women's shirt image">
<img src="{{asset('/').'/'.$val_sale['images']}}" alt="Women's shirt image"/>
</a>
</div>
<div class="compare-row compare-product">
<a href="/product/detail/{!! $val_sale['id'] !!}" title="Women's shirt image" class="active-color dark-hover">
{!! $val_sale['name'] !!}
</a>
</div>
<div class="compare-row compare-rating middle-color">
<div class="voting-stars stars-huge">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
16 reviews
</div>
<div class="compare-row compare-price active-color">
<strong>{!! $val_sale['sale'] !!}.&#36;</strong>
<del class="middle-color">{!! $val_sale['price'] !!}.&#36;</del>
</div>
<div class="compare-row compare-option middle-color">
{!! $val_sale['sale'] !!}
</div>
<div class="compare-row compare-option middle-color">
in Stock
</div>
<div class="compare-row compare-text middle-color">
  {!! $val_sale['intro_short'] !!}

</div>
<div class="compare-row compare-action">
<div class="button-dual light-color transition-all">
<button class=" button-dual-left middle-gradient dark-gradient-hover" type="submit">
  {{ csrf_field() }}
<a href="addshopcart" class="addshopcart" data-pid="{!! $val_sale['id']!!}" data-uid="Session::get('id')" data-price="{!! $val_sale['sale'] !!}">
Add to cart <i class="icon-shopping-cart"></i>
</a>
</button>
<a class="button-dual-right middle-gradient dark-gradient-hove">
<i class="icon-angle-down"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
<div class="grid-100">
  <div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
  {{ $sale->links()  }}
  </div>
</div>
</div>
</section>
@stop
