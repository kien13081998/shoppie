@extends('layouts.layout_admin')
@section('content')
<div class="container">
    <form class="form-signin1" action="{{ URL::action('NewsController@update',array('id', $news->id )) }}" method="post" enctype="multipart/form-data">
        <div class="login-wrap">
                        <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project"> -->
            <div class="row_form">
              <h5>name</h5>
              <input type="text"   class="form-control" name="title" value="{!! $news->name !!}"/>
            </div>
            <div class="row_form">
              <h5>detail</h5>
              <input type="text"   class="form-control" name="intro" value="{!! $news->detail !!}"/>
            </div>
            <!-- <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label> -->
            <button type="submit" class="btn btn-lg btn-login btn-block" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"></i>
            </button>
        </div>
    </form>
</div>
@stop
