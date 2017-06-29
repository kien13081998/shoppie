@extends('layouts.layout')
@section('content')
<section class="page-content">

<form class="content-form margin-bottom" method="POST" action="{{url('/user/login')}}" >
  {{ csrf_field() }}
    <div class="form-group">
        <label>Email:</label>
        <input class="form-control" type="text" name="email">
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input class="form-control" type="password" name="password">
    </div>

    <button class="btn btn-primary">Submit</button>
</form>
</section>
@stop
