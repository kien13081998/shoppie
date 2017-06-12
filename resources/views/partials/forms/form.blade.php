<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
<div class="form-group">
  {!! Form::label('name', 'Name') !!}
  <div class="form-controls">
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('detail', 'Detail') !!}
  <div class="form-controls">
    {!! Form::text('detail', null, ['class' =>
     'form-control']) !!}
</div>
</div>
  <div class="form-group">
    {!! Form::label('size', 'size') !!}
    <div class="form-controls">
      {!! Form::text('size', null, ['class' =>
       'form-control']) !!}
    </div>
  </div>
    <div class="form-group">
      {!! Form::label('images', 'images') !!}
      <div class="form-controls">
        {!! Form::text('images', null, ['class' =>
         'form-control']) !!}
      </div>
    </div>
      <div class="form-group">
        {!! Form::label('color', 'color') !!}
        <div class="form-controls">
          {!! Form::text('color', null, ['class' =>
           'form-control']) !!}
        </div>
      </div>
          <div class="form-group">
            {!! Form::label('quantity', 'quantity') !!}
            <div class="form-controls">
              {!! Form::text('quantity', null, ['class' =>
               'form-control']) !!}
            </div>
          </div>
            <div class="form-group">
              {!! Form::label('sale', 'sale') !!}
              <div class="form-controls">
                {!! Form::text('sale', null, ['class' =>
                 'form-control']) !!}
              </div>
            </div>
              <div class="form-group">
                {!! Form::label('price', 'price') !!}
                <div class="form-controls">
                  {!! Form::text('price', null, ['class' =>
                   'form-control']) !!}
                </div>
              </div>
{!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
