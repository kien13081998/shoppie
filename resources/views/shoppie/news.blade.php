@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="../home" class="dark-color active-hover">Home</a>
<a href="../news" class="dark-color active-hover">NEWS</a>
<strong class="active-color">Latest News</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar cream-gradient grid-25 transition-all" id="sidebar-mobile">
<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">Products</h2>
<ul class="sidebar-list">
  <?php foreach ($products as $va): ?>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="../../product/detail/{!! $va['id'] !!}"  class="sidebar-product dark-color active-hover">
<span>
{!! $va['name'] !!}
<strong class="active-color">{!! $va['price'] !!}</strong>
</span>
<img src="{{asset('/').'/'.$va['images']}}"  style="height:25px;"alt="Pablo Coelho jacket"/>
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="clearfix">
<div class="product-popup-top">
<a href="../../product/detail/{!! $va['id'] !!}">
<img src="{{asset('/').'/'.$va['images']}}" alt="Buy Pablo Coelho Jacket">
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
</div>
</li>
</ul>
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

<div class="content-with-sidebar grid-75">
<div class="with-shadow grid-100 light-bg">
<h1 class="active-color header-font with-border full">News</h1>

<?php foreach ($news as $key => $news_a): ?>

<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="news/detail/{!! $news_a['id'] !!}" class="thumbnail light-bg">
<img src="{{asset('/').'/'.$news_a['images']}}" alt="Why is the Christmas so important" style="height:200px;"/>
<!-- <span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span> -->
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="news/detail/{!! $news_a['id'] !!}" class="dark-color active-hover subheader-font">
{!! $news_a['name'] !!}
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="blog.html" class="middle-color dark-hover">Casual</a>,
<a href="blog.html" class="middle-color dark-hover">Fashion</a>,
<a href="blog.html" class="middle-color dark-hover">Vintage</a>
</div>
<p>
{!! $news_a['intro_short'] !!}
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="">{!! $news_a['created_at'] !!}</a> |
</span>
<a class="blog-list-more middle-color dark-hover" href="blog-detail.html">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
<div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
{{ $news->links()  }}
</div>
</div>
</section>

@stop
