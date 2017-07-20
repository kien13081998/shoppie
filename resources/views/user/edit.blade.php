@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<strong class="active-color">Update account</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="content-with-sidebar grid-100">
<p>If you already have an account with us, please login at the <a href="/home" class="active-color dark-hover"><strong>login page</strong></a></p>
<form class="content-form margin-bottom" action="{{url('/user/update'.'/'.$users->id)}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}

<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your personal details
</h2>
<div class="form-input">
<label for="first_name" class="middle-color">First name <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg{{ $errors->has('first_name') ? ' has-error' : '' }}" name="first_name" id="first_name" value="{!!  $users->first_name !!}"/>
@if ($errors->has('first_name'))
    <span class="help-block">
        <strong>{{ $errors->first('first_name') }}</strong>
    </span>
@endif
</input>
</div>
<div class="form-input">
<label for="last_name" class="middle-color">Last name <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg{{ $errors->has('last_name') ? ' has-error' : '' }}" name="last_name" id="last_name" value="{!! $users->last_name !!}"/>
@if ($errors->has('last_name'))
    <span class="help-block">
        <strong>{{ $errors->first('last_name') }}</strong>
    </span>
@endif
</input>
</div>
<div class="form-input">
<label for="avatar" class="middle-color">Avatar <span class="active-color">*</span></label>
<input type="file" class="text-input dark-color light-bg {{ $errors->has('images') ? ' has-error' : '' }}" name="images" id="avatar"/>
@if ($errors->has('images'))
    <span class="help-block">
        <strong>{{ $errors->first('images') }}</strong>
    </span>
@endif
</input>
</div>
<div class="form-input">
<label for="phone" class="middle-color">Telephone <span class="active-color">*</span></label>
<input type="tel" class="text-input dark-color light-bg" name="phone{{ $errors->has('phone') ? ' has-error' : '' }}" id="phone" value="{!! $users->phone !!}"/>
@if ($errors->has('phone'))
    <span class="help-block">
        <strong>{{ $errors->first('phone') }}</strong>
    </span>
@endif
</input>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your adress
</h2>
<div class="form-input">
<label for="street" class="middle-color">Street <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg{{ $errors->has('street') ? ' has-error' : '' }}" name="street" id="street" value="{!! $users->street !!}"/>
@if ($errors->has('street'))
    <span class="help-block">
        <strong>{{ $errors->first('street') }}</strong>
    </span>
@endif
</input>
</div>
<div class="form-input">
<label for="city" class="middle-color">City <span class="active-color">*</span></label>
<input type="text" class="text-input dark-color light-bg{{ $errors->has('city') ? ' has-error' : '' }}" name="city" id="city" value="{!! $users->city !!}"/>
@if ($errors->has('city'))
    <span class="help-block">
        <strong>{{ $errors->first('city') }}</strong>
    </span>
@endif
</input>
</div>
</div>
</div>
<p class="align-center middle-color">I have read and agree to the <a href="#" class="active-color dark-hover"><strong>Privacy Policy</strong></a></p>
<div class="form-submit">
<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">Update new account</button>
</div>
</form>
</div>
</div>
</section>
@stop
