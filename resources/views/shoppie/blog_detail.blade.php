@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="../../home" class="dark-color active-hover">Home</a>
<a href="../../blog" class="dark-color active-hover">Blog</a>
<a href="../../blog" class="dark-color active-hover">Summer</a>
<strong class="active-color">{!! $blogs->name !!}</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar cream-gradient grid-25 transition-all" id="sidebar-mobile">
<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">Products</h2>
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<?php foreach ($products as $key => $valp): ?>

<li class="popup-outside-trigger">
<a href="../../product/detail/{!! $valp['id'] !!}" class="sidebar-product dark-color active-hover">
<span>
{!! $valp['name'] !!}
<strong class="active-color">Price:{!! $valp['price'] !!}</strong>
</span>
<img src="{{asset('/').'/'.$valp['images']}}" style="height:25px;" alt="Pablo Coelho jacket"/>
</a>
</li>
<?php endforeach; ?>

</ul>
</div>

<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">What's News</h2>
<ul class="sidebar-list">
  <?php foreach ($news as $key => $valn): ?>

<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="products-list.html" class="sidebar-product dark-color active-hover">
<span>
{!! $valn['name']!!}
<small class="middle-color">{!! $valn['updated_at']!!}</small>
</span>
<img src="{{asset('/').'/'.$valn['images']}}" style="height:25px;" alt="Pablo Coelho jacket"/>

</a>
</li>
<?php endforeach; ?>

</ul>
</div>
</div>

<div class="content-with-sidebar grid-75">
<div class="with-shadow grid-100 light-bg">
<div class="content-page content-holder grid-100">

<a href="{{asset('/').'/'.$blogs->images}}" class="fancybox thumbnail light-bg margin-bottom"  title="Tommy Mancini brings the Summer Collection 2013">
<img src="{{asset('/').'/'.$blogs->images}}" style="height:250px;" alt="Tommy Mancini brings the Summer Collection 2013"/>
<span class="thumbnail-arrow light-color active-border"><i class="icon-zoom-in"></i></span>
</a>

<h1 class="block-header header-font dark-color">
{!! $blogs->name !!}
</h1>
<a href="../../blog" class="blog-category dark-color active-hover">
Casual, Fashion, Vintage
</a>
<div class="blog-details middle-color clearfix">
<a class="middle-color dark-hover uppercase" href="blog-detail.html">{!! $blogs->updated_at!!}</a> |
<a class="middle-color dark-hover" href="blog-detail.html#comments">4 comments</a> |
<a class="middle-color active-hover" href="blog-detail.html"><i class="icon-heart"></i> 151</a>
<div class="blog-details-share hide-on-mobile uppercase">
Share this post
<a href="https://www.facebook.com/adamantium.solutions" class="middle-color dark-hover transition-color" target="_blank">
<i class="icon-facebook-sign"></i>
</a>
<a href="https://twitter.com/AdamantiumSol" class="middle-color dark-hover transition-color" target="_blank">
<i class="icon-twitter"></i>
</a>
<a href="http://pinterest.com/" class="middle-color dark-hover transition-color" target="_blank">
<i class="icon-pinterest-sign"></i>
</a>
<a href="https://plus.google.com/u/0/113332714808714572645/posts" class="middle-color dark-hover transition-color" target="_blank">
<i class="icon-google-plus-sign"></i>
</a>
</div>
</div>
<p class="perex">
{!! $blogs->detail !!}
</p>
<hr/>


<hr/>

<a name="comments"></a>
<h2 class="subheader-font uppercase">Leave a reply</h2>
<form class="content-form margin-bottom" action="#" method="POST">
<div class="form-input">
<label for="name" class="middle-color">Your name</label>
<input type="text" class="text-input dark-color light-bg" name="name" id="name" value=""/>
</div>
<div class="form-input">
<label for="email" class="middle-color">Your email</label>
<input type="email" class="text-input dark-color light-bg" name="email" id="email" value=""/>
</div>
<div class="form-input">
<label for="message" class="middle-color">Your message</label>
<textarea class="textarea-input dark-color light-bg" name="message" id="message" cols="10" rows="5"></textarea>
</div>
<div class="form-submit">
<button type="submit" class="button-normal button-with-icon light-color middle-gradient dark-gradient-hover">
Post a comment
<span><i class="icon-angle-right"></i></span>
</button>
</div>
</form>
<hr/>
<div class="blog-comment middle-color">
<strong class="dark-color">John Smith</strong>
December 12, 2012 at 22:08
<p>
Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor.
Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate.
Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc. Nunc sed aliquet nisi. Nullam ut magna non lacus adipiscing volutpat.
Aenean odio mauris, consectetur quis consequat quis, blandit .
</p>
</div>
<hr/>
<div class="blog-comment middle-color prefix-5">
<strong class="dark-color">John Smith</strong>
December 12, 2012 at 22:08
<p>
Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor.
Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus
</p>
</div>
<hr/>
<div class="blog-comment middle-color">
<strong class="dark-color">John Smith</strong>
December 12, 2012 at 22:08
<p>
Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia.
Ut egestas bibendum tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate.
Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc. Nunc sed aliquet nisi. Nullam ut
</p>
</div>

</div>
</div>
</div>
</div>
</section>
@stop
