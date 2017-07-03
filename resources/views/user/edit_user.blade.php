@extends('layouts.layout_admin')
@section('content')
    <form class="form-signin1" action="{{url('/user/edit_user/'.$users->id)}}" role="form"  method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap">
            <div class="row_form{{ $errors->has('last_name') ? ' has-error' : '' }}">
              <h4>last_name</h4>
              <input type="text"   class="form-control" name="last_name" value="{!! $users->last_name !!}"/>
              @if ($errors->has('last_name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('last_name') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('first_name') ? ' has-error' : '' }}">
              <h4> first_name</h4>
              <input type="text"  class="form-control" name="first_name" value="{!! $users->first_name !!}"/>
              @if ($errors->has('first_name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('phone') ? ' has-error' : '' }}">
              <h4>phone number</h4>
              <input type="text"  class="form-control" name="phone" value="{!! $users->phone !!}"/>
              @if ($errors->has('phone'))
                  <span class="help-block">
                      <strong>{{ $errors->first('phone') }}</strong>
                  </span>
              @endif
            </input>

            </div>

            <div class="row_form{{ $errors->has('images') ? ' has-error' : '' }}">
              <h4>avatar</h4>
              <input type="file"  class="form-control" name="images"/>
              @if ($errors->has('images'))
                  <span class="help-block">
                      <strong>{{ $errors->first('images') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('street') ? ' has-error' : '' }}">
              <h4>street address</h4>
              <input type="text"  class="form-control" name="street" value="{!! $users->street !!}"/>
              @if ($errors->has('street'))
                  <span class="help-block">
                      <strong>{{ $errors->first('street') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('city') ? ' has-error' : '' }}">
              <h4>city</h4>
              <input type="text"  class="form-control" name="city" value="{!! $users->city !!}"/>
              @if ($errors->has('city'))
                  <span class="help-block">
                      <strong>{{ $errors->first('city') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('password') ? ' has-error' : '' }}">
              <h4>password</h4>
            <input type="password" class="form-control" name="password" id="password" value=""/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            </input>
            </div>
            <div class="row_form">
              <h4>Confirm password</h4>
            <input type="password" class="form-control" name="password_confirmation" id="confirm_password" value=""/>
            </div>
            <br>
            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check">Create</i>
            </button>
        </div>
    </form>
</div>
@stop
