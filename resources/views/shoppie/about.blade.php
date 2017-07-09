@extends('layouts.layout')
@section('content')

<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<a href="/about" class="dark-color active-hover">About us</a>
<strong class="active-color">All about shopping</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>

<div class="sidebar grid-25 cream-gradient transition-all" id="sidebar-mobile">

<div class="sidebar-box sidebar-top cream-gradient">
<nav class="submenu">
<ul class="expandable-menu">
<li class="align-right back">
<a href="#sidebar-mobile" class="dark-color active-hover click-slide"><i class="icon-chevron-right"></i></a>
</li>
<?php foreach ($abouts as $key => $val): ?>
<li>
<a href="#about-{!! $val['id'] !!}" class="dark-color active-hover selected">{!! $val['name'] !!}</a>
</li>
<?php endforeach; ?>
<li class="sidebar-divider"></li>
</ul>
</nav>
</div>
</div>

<div class="content-with-sidebar grid-75">
<div class="with-shadow grid-100 light-bg">
<div class="content-page grid-100">
  <?php foreach ($abouts as $key => $v): ?>
<h1 id="about-{!! $v['id']!!}" class="active-color header-font with-border full">{!! $v['name'] !!}</h1>
<p>
  {!! $v['detail'] !!}
</p>
<hr/>
<?php endforeach; ?>
</div>
</div>
</div>
<div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
{{ $abouts->links()  }}
</div>
</div>

</section>

@stop
