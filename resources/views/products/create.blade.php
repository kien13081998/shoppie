@extends('layouts.layout_admin')
@section('content')
    <form class="form-signin1" action="{{url('../product/create')}}" role="form"  method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
            <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project">  -->
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h4>Name</h4>
              <input type="text"   class="form-control" name="name"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('intro_short') ? ' has-error' : '' }}">
              <h4>Intro Short</h4>
              <input type="text"  class="form-control" name="intro_short"/>
              @if ($errors->has('intro_short'))
                  <span class="help-block">
                      <strong>{{ $errors->first('intro_short') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('brand') ? ' has-error' : '' }}">
              <h4>Brand</h4>
              <input type="text"  class="form-control" name="brand"/>
              @if ($errors->has('brand'))
                  <span class="help-block">
                      <strong>{{ $errors->first('brand') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('detail') ? ' has-error' : '' }}">
              <h4>Details</h4>
              <input type="text"  class="form-control" name="detail"/>
              @if ($errors->has('detail'))
                  <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                  </span>
              @endif
            </input>

            </div>

            <div class="row_form{{ $errors->has('images') ? ' has-error' : '' }}">
              <h4>Images</h4>
              <input type="file"  class="form-control" name="images"/>
              @if ($errors->has('images'))
                  <span class="help-block">
                      <strong>{{ $errors->first('images') }}</strong>
                  </span>
              @endif
            </input>

            </div>

            <div class="row_form{{ $errors->has('sale') ? ' has-error' : '' }}">
              <h4>Sale</h4>
              <input type="text"  class="form-control" name="sale"/>
              @if ($errors->has('sale'))
                  <span class="help-block">
                      <strong>{{ $errors->first('sale') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('price') ? ' has-error' : '' }}">
              <h4>Price</h4>
              <input type="text"  class="form-control" name="price"/>
              @if ($errors->has('price'))
                  <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <br>
            <div class="row_form{{ $errors->has('categories') ? ' has-error' : '' }}">
                  <div class="radios">
                    <h4>Categories</h4>
                  <?php foreach ($categories as $value): ?>
                      <label class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="{!! $value['id'] !!}" name="categories_id"> {!! $value['name']!!}
                          @if ($errors->has('categories'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('categories') }}</strong>
                              </span>
                          @endif
                        </input>

                      </label>
                    <?php endforeach; ?>
                  </div>
            </div>
             <!-- <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label> -->
            <br>
            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check">Create</i>
            </button>
        </div>
    </form>
</div>
@stop
