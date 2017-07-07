@extends('layouts.layout')
@section('content')
<section class="page-content">
<div class="page-block page-tabs-block cream-bg grid-container">

<div class="page-tabs grid-100 shoppie-tabs">
<h2 class="header-font">
<a class="light-color active-hover dark-gradient cream-gradient-hover transition-color" href="#products-kid">
<span class="hide-on-mobile">New Products Kid</span>
<i class="icon-thumbs-up hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="light-color active-hover dark-gradient cream-gradient-hover transition-color" href="#products-women">
<span class="hide-on-mobile">New Products Women</span>
<i class="icon-heart hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="light-color active-hover dark-gradient cream-gradient-hover transition-color" href="#products-men">
<span class="hide-on-mobile">New Products Men</span>
<i class="icon-star hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
</div>
<div class="page-tabs-holder">

<div class="page-tab" id="products-kid">
<?php foreach ($products_kid as $value): ?>
<div class="grid-25 tablet-grid-50">
<div class="product-box light-bg">
<a class="product-img" href="../product/detail/{!! $value['id'] !!}">
<span><img src="{{asset('/').'/'.$value['images']}}" alt="Pablo Coelho jacket"/></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="../product/detail/{!! $value['id'] !!}" class="dark-color active-hover">
<strong>{!!$value['name']!!}</strong>
</a>
</h3>
<a href="products-grid.html" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $value['price'] !!}</del>
<strong>{!! $value['sale'] !!}</strong>
</div>
<div class="clear"></div>
<div class="button-dual light-color transition-all">
<a href="cart.html" class=" addcart button-dual-left middle-gradient dark-gradient-hover" data-pid="{!! $value['id']!!}" data-price="{!!$value['price']!!}">
Add to cart <i class="icon-shopping-cart"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<?php endforeach; ?>
<div class="grid-100 clear-before">
<a class="button-block middle-color dark-hover light-bg middle-border" onclick="Products.loadMoreProducts($(this).parent(), this, 4); return false" href="components/products.html">
<strong>Load more clothes</strong> &nbsp; <i class="icon-repeat"></i>
</a>
</div>
</div>

<div class="page-tab" id="products-women">
<?php foreach ($products_women as $val): ?>
<div class="grid-25 tablet-grid-50">
<div class="product-box light-bg">
<a class="product-img" href="../product/detail/{!! $val['id'] !!}">
<span><img src="{{asset('/').'/'.$val['images']}}" alt="Pablo Coelho jacket"/></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="../product/detail/{!! $val['id'] !!}" class="dark-color active-hover">
<strong>{!! $val['name'] !!}</strong>
</a>
</h3>
<a href="products-grid.html" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $val['price'] !!}</del>
<strong>{!! $val['sale'] !!}</strong>
</div>
<div class="clear"></div>
<div class="button-dual light-color transition-all">
<a href="cart.html" class="addcart  button-dual-left middle-gradient dark-gradient-hover"  data-pid="{!! $val['id']!!}" data-price="{!! $val['price']!!}">
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
<a class="button-block middle-color dark-hover light-bg middle-border" onclick="Products.loadMoreProducts($(this).parent(), this, 4); return false" href="components/products.html">
<strong>Load more clothes</strong> &nbsp; <i class="icon-repeat"></i>
</a>
</div>
</div>

<div class="page-tab" id="products-men">

<?php foreach ($products_men as $v): ?>
<div class="grid-25 tablet-grid-50">
<div class="product-box light-bg">
<a class="product-img" href="../product/detail/{!! $v['id'] !!}">
<span><img src="{{asset('/').'/'.$v['images']}}" alt="Pablo Coelho jacket"/></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="../product/detail/{!! $val['id'] !!}" class="dark-color active-hover">
<strong>{!! $v['name'] !!}</strong>
</a>
</h3>
<a href="products-grid.html" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">{!! $v['price'] !!}</del>
<strong>{!! $v['sale'] !!}</strong>
</div>
<div class="clear"></div>
<div class="button-dual light-color transition-all">
<a href="cart.html" class="addcart button-dual-left middle-gradient dark-gradient-hover"  data-pid="{!! $v['id']!!}" data-price="{!!$v['price']!!}">
Add to cart <i class="icon-shopping-cart"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<?php endforeach; ?>
<div class="grid-100 clear-before">
<a class="button-block middle-color dark-hover light-bg middle-border" onclick="Products.loadMoreProducts($(this).parent(), this, 4); return false" href="components/products.html">
<strong>Load more clothes</strong> &nbsp; <i class="icon-repeat"></i>
</a>
</div>
</div>
</div>
</div>

<div class="page-block cream-bg grid-container">
<div class="block-banners margin-bottom clearfix">
  <?php foreach ($products as $key => $valp): ?>
<div class="banner grid-33 tablet-grid-33">
<a href="../../product/detail/{!! $valp['id'] !!}" class="thumbnail light-bg">
<img src="{{asset('/').'/'.$valp['images']}}" alt="Zara McCartney"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<?php endforeach; ?>
</div>
<div class="grid-100 margin-bottom">
<div class="tip dark-color light-bg">
<span class="tip-ribbon"></span>
<p>
<strong>Can we help you?</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type book.
</p>
</div>
</div>

<div class="grid-100">
<h2 class="active-color header-font">From our blog</h2>
</div>

<div class="blog-grid margin-bottom clearfix">
  <?php foreach ($blogs as $key => $valb): ?>

<div class="blog-item grid-33 tablet-grid-33">
<h3 class="blog-title subheader-font">
<a href="../../blog/detail/{!! $valb['id']!!}" class="dark-color active-hover">
<strong>Why is the Christmas so important?</strong>
</a>
</h3>
<div class="blog-info middle-color">
<a href="blog-detail.html" class="active-hover">{!! $valb['updated_at']!!}</a> &nbsp; | &nbsp;
<a href="blog-detail.html#comments" class="active-hover">4 comments</a> &nbsp; | &nbsp;
<i class="icon-heart"></i> 151
</div>
<a href="../../blog/detail/{!! $valb['id'] !!}" class="thumbnail light-bg">
<img src="{{asset('/').'/'.$valb['images']}}" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
<p class="blog-description dark-color">
{!! $valb['intro_short'] !!}
</p>
</div>
<?php endforeach; ?>

</div>

<div class="grid-100">
<hr class="margin-bottom"/>
</div>

<div class="grid-100">
<h2 class="active-color header-font">Our brands</h2>
</div>

<div class="block-brands margin-bottom">

<div class="brands-row margin-bottom clearfix">
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand1.jpg" alt="Brand 1"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand5.jpg" alt="Brand 5"/></a>
</div>
</div>
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand2.jpg" alt="Brand 2"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand3.jpg" alt="Brand 3"/></a>
</div>
</div>
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand4.jpg" alt="Brand 4"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand1.jpg" alt="Brand 1"/></a>
</div>
</div>
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand2.jpg" alt="Brand 2"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand3.jpg" alt="Brand 3"/></a>
</div>
</div>
</div>

<div class="brands-row clearfix">
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand3.jpg" alt="Brand 3"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand4.jpg" alt="Brand 4"/></a>
</div>
</div>
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand1.jpg" alt="Brand 1"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand5.jpg" alt="Brand 5"/></a>
</div>
</div>
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand2.jpg" alt="Brand 2"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand3.jpg" alt="Brand 3"/></a>
</div>
</div>
<div class="grid-25 tablet-grid-50 grid-parent">
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand5.jpg" alt="Brand 5"/></a>
</div>
<div class="brand-item grid-50 tablet-grid-50 mobile-grid-50">
<a href="#"><img src="images/photos/img-brand4.jpg" alt="Brand 4"/></a>
</div>
</div>
</div>
</div>

<div class="grid-100">
<hr class="margin-bottom"/>
</div>

<div class="block-facebook grid-100">
<div class="block-facebook-border">
<div class="fb-like-box" data-href="https://www.facebook.com/facebook" data-width="900" data-height="180" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
</div>
</div>
</div>
</section>
@stop
