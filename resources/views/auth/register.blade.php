@extends('layouts.admin')

@section('content')

<div class="container">

    <form class="form-signin" role="form" action="{{ route('register') }}" method="POST">
      {{ csrf_field() }}
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Registration</h1>
            <img src="{{asset('images/login-logo.png')}}" alt=""/>
        </div>


        <div class="login-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" placeholder=" Name" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </input>

            <input type="text" placeholder="Email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </input>

            <input type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </input>

            <input type="password" placeholder= "Confirm Password" class="form-control" name="password_confirmation">

            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                Already Registered.
                <a href="{{ route('login') }}" class="">
                    Login
                </a>
                <a href="{{ route('register') }}" class="">
                    Register
                </a>
            </div>

        </div>

    </form>

</div> -->


@endsection
