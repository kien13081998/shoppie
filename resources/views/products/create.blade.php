@extends('layouts.layout_admin')
<!-- @section('content') -->
<div class="container">

  @section('content')
    {!! Form::open(['action' => ['ProductController@create'], 'method' => 'POST']) !!}

      @include('partials.forms.form')

    {!! Form::close() !!}
  @stop

    <!-- <form class="form-signin1" action="{{ URL::action('ProductController@store') }}" method="post" enctype="multipart/form-data">
        <div class="login-wrap">
            <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project"> -->
            <!--<div class="row_form">
              <h5>name</h5>
              <input type="text"   class="form-control" name="name"/>
            </div>
            <div class="row_form">
              <h5>details</h5>
              <input type="text"  class="form-control" name="detail"/>
            </div>
            <div class="row_form">
              <h5>size</h5>
              <input type="text"  class="form-control" name="size"/>
            </div>
            <div class="row_form">
              <h5>images</h5>
              <input type="image"  class="form-control" name="images"/>
            </div>
            <div class="row_form">
              <h5>color</h5>
              <input type="text"  class="form-control" name="color"/>
            </div>
            <div class="row_form">
              <h5>code</h5>
              <input type="text"  class="form-control" name="code"/>
            </div>
            <div class="row_form">
              <h5>quantity</h5>
              <input type="text"  class="form-control" name="quantity"/>
            </div>
            <div class="row_form">
              <h5>sale</h5>
              <input type="text"  class="form-control" name="sale"/>
            </div>
            <div class="row_form">
              <h5>price</h5>
              <input type="text"  class="form-control" name="price"/>
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
            <!-- <button type="submit" class="btn btn-lg btn-login btn-block" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"></i>
            </button>
        </div>
    </form> -->
</div>
<!-- @stop -->
