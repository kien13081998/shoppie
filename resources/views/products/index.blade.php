@extends('layouts.layout_admin')
@section('content')

<div class="wrapper">
  <th><a href="{{ url('/product/list') }}">Back to the overview</a></th>

  <div class="row">
  <div class="col-sm-12">
    <table class="table table-bordered table-striped table-condensed">
      <?php foreach ($products as $v): ?>
      <thead>
      <tr>
        <th>
          <a href="../product/show/{!! $v['id']!!}"><strong>{{ $v['name'] }}</strong>
          </a>
        </th>
          <th>
            <a href="/product/edit/{!! $v['id'] !!}">edit</a>
            <a href="/product/destroy/{!! $v['id']!!}">delete</a>
            <a href="/product/show/{!! $v['id']!!}">show</a>
          </th>
      </tr>
      </thead>
      <tbody>
      <?php endforeach; ?>
      </tbody>
  </table>
  </div>
</div>
</div>

@stop
