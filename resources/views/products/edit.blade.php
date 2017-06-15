@extends('layouts.layout_admin')
@section('content')
    <form class="form-signin1" action="{{url('../product/{create}')}}" role="form"  method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
            <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project">  -->
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h5>name</h5>
              <input type="text"   class="form-control" name="name"value="{!! $news->name !!}"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('detail') ? ' has-error' : '' }}">
              <h5>details</h5>
              <input type="text"  class="form-control" name="detail" value="{!! $news->detail !!}"/>
              @if ($errors->has('detail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('size') ? ' has-error' : '' }}">
              <h5>size</h5>
              <input type="text"  class="form-control" name="size" value="{!! $news->size !!}"/>
              @if ($errors->has('size'))
                  <span class="help-block">
                      <strong>{{ $errors->first('size') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('images') ? ' has-error' : '' }}">
              <h5>images</h5>
              <input type="file"  class="form-control" name="images" value=""/>
              @if ($errors->has('images'))
                  <span class="help-block">
                      <strong>{{ $errors->first('images') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('color') ? ' has-error' : '' }}">
              <h5>color</h5>
              <input type="text"  class="form-control" name="color" value="{!! $news->color !!}"/>
              @if ($errors->has('color'))
                  <span class="help-block">
                      <strong>{{ $errors->first('color') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('code') ? ' has-error' : '' }}">
              <h5>code</h5>
              <input type="text"  class="form-control" name="code" value="{!! $news->code !!}"/>
              @if ($errors->has('code'))
                  <span class="help-block">
                      <strong>{{ $errors->first('code') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('quantity') ? ' has-error' : '' }}">
              <h5>quantity</h5>
              <input type="text"  class="form-control" name="quantity" value="{!! $news->quantity !!}"/>
              @if ($errors->has('quantity'))
                  <span class="help-block">
                      <strong>{{ $errors->first('quantity') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('sale') ? ' has-error' : '' }}">
              <h5>sale</h5>
              <input type="text"  class="form-control" name="sale" value="{!! $news->sale !!}"/>
              @if ($errors->has('sale'))
                  <span class="help-block">
                      <strong>{{ $errors->first('sale') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('price') ? ' has-error' : '' }}">
              <h5>price</h5>
              <input type="text"  class="form-control" name="price" value="{!! $news->price !!}"/>
              @if ($errors->has('price'))
                  <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
            </div>
            <!-- <div class="row_form">
              <div class="form-group">
                <h5>status</h5>
                <div class="col-lg-10">
                  <div class="radios">
                      <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="0" id="radio-01" name="status"> hiện
                      </label>
                      <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="1" id="radio-02" name="status">  ẩn
                      </label>
                  </div>
                </div>
              </div>
            </div> -->
             <!-- <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label> -->
            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"></i>
            </button>
        </div>
    </form>
</div>
@stop
