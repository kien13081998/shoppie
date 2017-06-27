@extends('layouts.layout_admin')
@section('content')
<div class="">
    <form class="form-signin1" action="{{url('../about_us/update/'.$abouts->id)}}" method="post" role="form" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap">
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h5>name</h5>
              <input type="text"   class="form-control" name="name" value="{!! $abouts->name !!}"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('detail') ? ' has-error' : '' }}">
              <h5>detail</h5>
              <input type="text"   class="form-control" name="detail" value="{!! $abouts->detail !!}"/>
              @if ($errors->has('detail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                  </span>
              @endif
            </div>
            <br>
            <button type="submit" class="btn btn-lg btn-login btn-block btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"> Update</i>
            </button>
        </div>
    </form>
</div>
@stop
