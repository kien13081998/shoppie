@extends('layouts.layout_admin')
@section('content')
    <form class="form-signin1" action="{{url('../product/update/'.$products->id)}}" role="form"  method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
            <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project">  -->
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h5>name</h5>
              <input type="text"   class="form-control" name="name"value="{!! $products->name !!}"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('detail') ? ' has-error' : '' }}">
              <h5>details</h5>
              <input type="text"  class="form-control" name="detail" value="{!! $products->detail !!}"/>
              @if ($errors->has('detail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('size') ? ' has-error' : '' }}">
              <h5>size</h5>
              <input type="text"  class="form-control" name="size" value="{!! $products->size !!}"/>
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
              <input type="text"  class="form-control" name="color" value="{!! $products->color !!}"/>
              @if ($errors->has('color'))
                  <span class="help-block">
                      <strong>{{ $errors->first('color') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('code') ? ' has-error' : '' }}">
              <h5>code</h5>
              <input type="text"  class="form-control" name="code" value="{!! $products->code !!}"/>
              @if ($errors->has('code'))
                  <span class="help-block">
                      <strong>{{ $errors->first('code') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('quantity') ? ' has-error' : '' }}">
              <h5>quantity</h5>
              <input type="text"  class="form-control" name="quantity" value="{!! $products->quantity !!}"/>
              @if ($errors->has('quantity'))
                  <span class="help-block">
                      <strong>{{ $errors->first('quantity') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('sale') ? ' has-error' : '' }}">
              <h5>sale</h5>
              <input type="text"  class="form-control" name="sale" value="{!! $products->sale !!}"/>
              @if ($errors->has('sale'))
                  <span class="help-block">
                      <strong>{{ $errors->first('sale') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('price') ? ' has-error' : '' }}">
              <h5>price</h5>
              <input type="text"  class="form-control" name="price" value="{!! $products->price !!}"/>
              @if ($errors->has('price'))
                  <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
            </div>
            <div class="row_form{{ $errors->has('status') ? ' has-error' : '' }}">
              <div class="form-group">
                <h5>categories</h5>
                <div class="col-lg-10">
                  <div class="radios">
                      <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="0" id="radio-01" name="categories_id"> KID
                      </label>
                      <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="1" id="radio-02" name="categories_id">  MAN
                      </label>
                      <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="2" id="radio-02" name="categories_id">  WOMEN
                      </label>
                  </div>
                  @if ($errors->has('status'))
                      <span class="help-block">
                          <strong>{{ $errors->first('status') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"></i>
            </button>
        </div>
    </form>
</div>
@stop
