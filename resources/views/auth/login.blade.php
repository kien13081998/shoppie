@extends('layouts.admin')

@section('content')
<div class="container">

    <form class="form-signin" role="form" action="{{url('login')}}" method="POST">
      {{ csrf_field() }}
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img src="{{asset('images/login-logo.png')}}" alt=""/>
        </div>
        <div class="login-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="text" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Email" name="email" value="" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </input>
            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </input>
            <button class="btn btn-lg btn-login btn-block btn btn-primary" type="submit">
                <i class="fa fa-check"></i>
            </button>

            <div class="registration">
                Not a member yet?
                <a class="" href="{{ route('register') }}">
                    Signup
                </a>
            </div>
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="{{ route('password.request') }}" class="btn btn-link"> Forgot Password?</a>

                </span>
            </label>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>


@endsection
