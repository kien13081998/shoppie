@extends('layouts.layout')
@section('content')
<section class="page-content">

    <form class="form-signin" role="form" action="{{url('/user/login')}}" method="POST">
      {{ csrf_field() }}
        <div class="login-wrap {{ $errors->has('error') ? ' has-error' : '' }}">
            @if (session('error'))
            <div class="alert alert-success">
            {{ session('error') }}
            </div>
            @endif
            <input type="text" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Email" name="email" value="" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </input>
            <input type="password" id="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </input>
            <button class="btn btn-lg btn-login btn-block" type="submit">login
                <i class="fa fa-check">      </i>
            </button>
            <div class="registration">
                Not a member yet?
                <a class="" href="/user/register">
                    Signup
                </a>
            </div>
          <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="" class="btn btn-link"> Forgot Password?</a>

                </span>
            </label>

        </div>
    </form>
</section>
@stop
