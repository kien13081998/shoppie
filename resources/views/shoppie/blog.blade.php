@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="homepage.html" class="dark-color active-hover">Home</a>
<a href="blog.html" class="dark-color active-hover">Blog</a>
<strong class="active-color">Summer</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar cream-gradient grid-25 transition-all" id="sidebar-mobile">
<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">Products</h2>
<ul class="sidebar-list">
  <?php foreach ($products as $key => $vp): ?>

<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="../../product/detail/{!! $vp['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $vp['name'] !!}
<strong class="active-color">Price:{!! $vp['price'] !!}</strong>
</span>
<img src="{{asset('/').'/'.$vp['images']}}"style="height:25px;" alt="Pablo Coelho jacket"/>
</a>
</li>
<?php endforeach; ?>



</ul>
</div>

<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">What's News</h2>
<ul class="sidebar-list">
  <?php foreach ($news as $key => $vn): ?>

<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="../../news/details/{!! $vn['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $vn['name'] !!}
<small class="middle-color"></small>
</span>
<img src="{{asset('/').'/'.$vn['images']}}" style="height:25px;" alt="Pablo Coelho jacket"/>
</a>
</li>
<?php endforeach; ?>

</ul>
</div>
</div>

<div class="content-with-sidebar grid-75">
<div class="with-shadow grid-100 light-bg">
<div class="content-page grid-100">
<h1 class="active-color header-font with-border full">Summer</h1>
<?php foreach ($blogs as $key => $v_b): ?>

<div class="blog-list clearfix">
<div class="blog-list-image grid-40 tablet-grid-40">
<a href="../../blog/detail/{!! $v_b['id'] !!}" class="thumbnail light-bg">
<img src="{{asset('/').'/'.$v_b['images']}}" alt="Why is the Christmas so important"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>
</div>
<div class="blog-list-details grid-60 tablet-grid-60">
<h2 class="blog-list-title">
<a href="../../blog/detail/{!! $v_b['id'] !!}" class="dark-color active-hover subheader-font">
{!! $v_b['name'] !!}
</a>
</h2>
<div class="blog-list-tags middle-color">
<a href="../../blog" class="middle-color dark-hover">Casual</a>,
<a href="../../blog" class="middle-color dark-hover">Fashion</a>,
<a href="../../blog" class="middle-color dark-hover">Vintage</a>
</div>
<p>
{!! $v_b['intro_short'] !!}
</p>
<div class="blog-list-actions middle-color">
<span class="hide-on-mobile">
<a class="middle-color dark-hover uppercase" href="../../blog/detail/{!! $v_b['id'] !!}">{!! $v_b['updated_at'] !!}</a> |
<a class="middle-color dark-hover" href="../../blog/detail/{!! $v_b['id'] !!}">4 comments</a> |
<a class="middle-color active-hover" href="../../blog/detail/{!! $v_b['id'] !!}"><i class="icon-heart"></i> 151</a>
</span>
<a class="blog-list-more middle-color dark-hover" href="../../blog/detail/{!! $v_b['id'] !!}">Read more <i class="icon-plus-sign"></i></a>
</div>
</div>
</div>
<hr class="margin-bottom"/>
<?php endforeach; ?>


</div>
</div>
</div>
</div>
</section>
@stop
