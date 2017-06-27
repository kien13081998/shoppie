@extends('layouts.layout_admin')
@section('content')
<div class="">
    <form class="form-signin1" action="{{url('../blog/update/'.$blog->id)}}" method="post" role="form" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap">
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h5>name</h5>
              <input type="text"   class="form-control" name="name" value="{!! $blog->name !!}"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </input>
            </div>
            <div class="row_form{{ $errors->has('intro_short') ? ' has-error' : '' }}">
              <h5>intro_short</h5>
              <input type="text"   class="form-control" name="intro_short" value="{!! $blog->intro_short !!}"/>
              @if ($errors->has('intro_short'))
                  <span class="help-block">
                      <strong>{{ $errors->first('intro_short') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('detail') ? ' has-error' : '' }}">
              <h5>detail</h5>
              <input type="text"   class="form-control" name="detail" value="{!! $blog->detail !!}"/>
              @if ($errors->has('detail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('images') ? ' has-error' : '' }}">
              <h5>images</h5>
              <input type="file"  class="form-control" name="images" value=""/>
              @if ($errors->has('images'))
                  <span class="help-block">
                      <strong>{{ $errors->first('images') }}</strong>
                  </span>
              @endif
            </input>
              
            </div>
            <!-- <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label> -->
            <br>
            <button type="submit" class="btn btn-lg btn-login btn-block btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"> Update</i>
            </button>
        </div>
    </form>
</div>
@stop
