@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<a href="/show" class="dark-color active-hover">Shopping cart</a>
<strong class="active-color {{ $errors->has('order') ? ' has-error' : '' }}">
@if (session('order'))
  {{ session('order') }}
@endif
</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">

<div class="content-holder grid-100">
<div class="cart-header well-shadow well-table light-bg margin-bottom hide-on-mobile">
<div class="well-box-middle grid-5 tablet-grid-5">STT</div>
<div class="well-box-middle grid-10 tablet-grid-10">Images</div>
<div class="well-box-middle grid-30 tablet-grid-30">Product name</div>
<div class="well-box-middle align-center grid-10 tablet-grid-10">Quantity</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Off Sale</div>
<div class="well-box-middle align-center grid-15 tablet-grid-15">Unit Price</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">Total Price</div>
</div>
<div class="cart-product-list well-shadow">
  <?php $STT=0;?>
	@foreach($content as $contents)
<div class="cart-product well-table light-bg">
<div class="well-box-middle grid-5 tablet-grid-5">{!! $STT=$STT+1 !!}</div>
<div class="well-box-middle cart-product-image align-center grid-10 tablet-grid-10">
<a href="products-detail.html" title="Tommy Mancini">
<img src="{!! asset(''.$contents->options->img) !!}" alt=""/>
</a>
</div>
<div class="well-box-middle well-border-gradient grid-30 tablet-grid-30">
<div class="cart-product-info">
<div class="cart-product-title">
<a href="/product/detail/{!! $contents->id !!}" title="Tommy Mancini" class="header-font dark-color active-hover"><strong>{!! $contents->name !!}</strong></a>
<a href="/product/detail/{!! $contents->id !!}" title="Women’s Suit Jacket" class="cart-product-category middle-color dark-hover">{!! $contents->options->brand !!}</a>
</div>
</div>
</div>
<div class="parent grid-100 grid-parent margin-bottom clearfix">
<div class="quaranty well-box-middle well-border-gradient align-center grid-5 tablet-grid-5">
  {{Form::open(['route'=>['shoppingQty', $contents->id,$contents->qty], 'method'=>'put'])}}
  <input type="number" name="quantity[40]" class="qty text-input product-quantity dark-color light-bg" value="{!! $contents->qty !!}">
  <a href="#" class="updateCart" id="{!! $contents->rowId  !!}"><img src="{!! asset('/images/update.png') !!}" alt=""></a>
  {{ Form::close() }}
</div>
<div class="price well-box-middle well-border-gradient align-center grid-10 tablet-grid-10 middle-color">
<strong>{!! $contents->price,"." !!} <i style="color:red;">&#36;</i></strong>
</div>
<div class="well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>{!! $contents->options->unit_price,"." !!}<i style="color:red;">&#36;</i></strong>
</div>
<div class="total well-box-middle align-center last grid-15 tablet-grid-15 active-color">
<strong>{!! ($contents->price)*$contents->qty,"." !!}<i style="color:red;">&#36;</i></strong>
</div>
<a class="cart-product-remove circle-button dark-bg active-bg-hover hide-on-desktop" href="{{ route('cartDelete',['rowId' => $contents->rowId]) }}"><span class="cancel"></span></a>
</div>
</div>
@endforeach
</div>
</div>
<div class=" well-shadow well-box last light-bg align-right">
<dl class="cart-total clearfix">
<dt class="uppercase dark-color">Total:</dt>
<dd class="active-color" id="total_order">{!! ($subtotal) !!} &#36;</dd>
</dl>
@if(Session::get('id'))
<a href="/dat-hang" class="shoppingcart button-normal button-with-icon light-color active-gradient dark-gradient-hover" data-userid="{!! Session::get('id') !!}" data-totalprice="{!! $subtotal !!}">
Send Order <span><i class="icon-angle-right"></i></span>
</a>
@else
<a href="/user/login" class="button-normal button-with-icon light-color active-gradient dark-gradient-hover">
login to by <span><i class="icon-angle-right"></i></span>
</a>
@endif
</div>
</div>
</div>
</section>

@stop
