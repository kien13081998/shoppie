@extends('layouts.layout_admin')
@section('content')
    <form class="form-signin1" action="{{url('../product/update/'.$products->id)}}" role="form"  method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="login-wrap{{ $errors->has('name') ? ' has-error' : '' }}">
            <!-- <input type="text" autofocus="" placeholder="project" class="form-control" name="project">  -->
            <div class="row_form{{ $errors->has('name') ? ' has-error' : '' }}">
              <h4>Name</h4>
              <input type="text"   class="form-control" name="name"value="{!! $products->name !!}"/>
              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('intro_short') ? ' has-error' : '' }}">
              <h4>Intro Short</h4>
              <input type="text"  class="form-control" name="intro_short" value="{!! $products->intro_short !!}"/>
              @if ($errors->has('intro_short'))
                  <span class="help-block">
                      <strong>{{ $errors->first('intro_short') }}</strong>
                  </span>
              @endif
            </input>

            </div>

            <div class="row_form{{ $errors->has('brand') ? ' has-error' : '' }}">
              <h4>Brand</h4>
              <input type="text"  class="form-control" name="brand" value="{!! $products->brand !!}"/>
              @if ($errors->has('brand'))
                  <span class="help-block">
                      <strong>{{ $errors->first('brand') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('images') ? ' has-error' : '' }}">
              <h5>Images</h5>
              <input type="file"  class="form-control" name="images" value=""/>
              @if ($errors->has('images'))
                  <span class="help-block">
                      <strong>{{ $errors->first('images') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('quantity') ? ' has-error' : '' }}">
              <h4>Quantity</h4>
              <input type="text"  class="form-control" name="quantity" value="{!! $products->quantity !!}"/>
              @if ($errors->has('quantity'))
                  <span class="help-block">
                      <strong>{{ $errors->first('quantity') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('sale') ? ' has-error' : '' }}">
              <h4>Sale</h4>
              <input type="text"  class="form-control" name="sale" value="{!! $products->sale !!}"/>
              @if ($errors->has('sale'))
                  <span class="help-block">
                      <strong>{{ $errors->first('sale') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('price') ? ' has-error' : '' }}">
              <h4>Price</h4>
              <input type="text"  class="form-control" name="price" value="{!! $products->price !!}"/>
              @if ($errors->has('price'))
                  <span class="help-block">
                      <strong>{{ $errors->first('price') }}</strong>
                  </span>
              @endif
            </input>

            </div>
            <div class="row_form{{ $errors->has('color') ? ' has-error' : '' }}">
                <h4>Color</h4>
                    <select class="col-lg-12" name="color" value="">
                      <option value="Brown">Brown</option>
                      <option value="Blue">Blue</option>
                      <option value="Red">Red</option>
                      <option value="Green">Green</option>
                      <option value="Black">Black</option>
                      <option value="White">White</option>
                      <option value="Yellow">Yellow</option>
                      <option value="Magenta">Magenta</option>
                      <option value="Cyan">Cyan</option>
                    </select>
                      @if ($errors->has('color'))
                          <span class="help-block">
                              <strong>{{ $errors->first('color') }}</strong>
                          </span>
                      @endif
            </div>
            <div class="row_form{{ $errors->has('size') ? ' has-error' : '' }}">
                <h4>Size</h4>
                  <div class="radios">
                      <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="XS" id="radio-01" name="size"> XS
                      </label>
                      <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="S" id="radio-02" name="size"> S
                      </label>
                      <label for="radio-03" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="M" id="radio-03" name="size"> M
                      </label>
                      <label for="radio-04" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="L" id="radio-04" name="size"> L
                      </label>
                      <label for="radio-05" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="XL" id="radio-05" name="size">  XL
                      </label>
                      <label for="radio-06" class="label_radio col-lg-6 col-sm-6">
                          <input type="radio" value="XXL" id="radio-06" name="size">  XXL
                      </label>
                      @if ($errors->has('size'))
                          <span class="help-block">
                              <strong>{{ $errors->first('size') }}</strong>
                          </span>
                      @endif

                </div>
            </div>

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
            <button type="submit" class="btn btn-lg btn-login btn-block btn btn-primary" name="submit" value="submit" style="background:#6BC5A4;">
                <i class="fa fa-check"></i>
            </button>
        </div>
    </form>
</div>
@stop
