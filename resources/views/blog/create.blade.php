@extends('layouts.layout_admin')
@section('content')
<div class="">
    <form class="form-signin1" action="{{url('../blog/create')}}" role="form" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
            <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project"> -->
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h5>name</h5>
              <input type="text"   class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </input>
            </div>
            <div class="row_form{{ $errors->has('intro_short') ? ' has-error' : '' }}">
              <h5>intro_short</h5>
              <input type="text"  class="form-control{{ $errors->has('intro_short') ? ' has-error' : '' }}" name="intro_short" value="{{ old('intro_short') }}"/>
              @if ($errors->has('intro_short'))
                  <span class="help-block">
                      <strong>{{ $errors->first('intro_short') }}</strong>
                  </span>
              @endif
            </input>
            </div>
            <div class="row_form{{ $errors->has('detail') ? ' has-error' : '' }}">
              <h5>details</h5>
              <input type="text"  class="form-control{{ $errors->has('detail') ? ' has-error' : '' }}" name="detail" value="{{ old('detail') }}"/>
              @if ($errors->has('detail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                  </span>
              @endif
            </input>
            </div>
            <div class="row_form{{ $errors->has('images') ? ' has-error' : '' }}">
              <h5>images</h5>
              <input type="file"  class="form-control" name="images"/>
              @if ($errors->has('images'))
                  <span class="help-block">
                      <strong>{{ $errors->first('images') }}</strong>
                  </span>
              @endif
            </input>
            </div>
            <br>
            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check">Create</i>
            </button>
        </div>
    </form>
</div>
@stop
