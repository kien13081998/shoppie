@extends('layouts.layout')
@section('content')
<section class="page-content">

<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/home" class="dark-color active-hover">Home</a>
<strong class="active-color">Update password account</strong>
</div>
</div>

<div class="page-block page-block-bottom cream-bg grid-container">
<div class="content-with-sidebar grid-100">
<p>If you already have an account with us, please login at the <a href="/home" class="active-color dark-hover"><strong>login page</strong></a></p>
<form class="content-form margin-bottom" action="{{url('/user/update/password'.'/'.$users->id)}}" method="POST">
  {{ csrf_field() }}
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Your password
</h2>
<div class="form-input">
<label for="password" class="middle-color">Password New <span class="active-color">*</span></label>
<input type="password" class="text-input dark-color light-bg{{ $errors->has('password') ? ' has-error' : '' }}" name="password" id="password" value=""/>
@if ($errors->has('password'))
    <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
</input>
</div>

<div class="form-input">
<label for="confirm_password" class="middle-color">Confirm password <span class="active-color">*</span></label>
<input type="password" class="text-input dark-color light-bg" name="password_confirmation" id="confirm_password" value=""/>
</div>
</div>
</div>
<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
<div class="content-page grid-100">
<h2 class="bigger-header with-border subheader-font">
Newsletter
</h2>
</div>
</div>
<p class="align-center middle-color">I have read and agree to the <a href="#" class="active-color dark-hover"><strong>Privacy Policy</strong></a></p>
<div class="form-submit">
<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">Update password new account</button>
</div>
</form>
</div>
</div>
</section>
@stop
