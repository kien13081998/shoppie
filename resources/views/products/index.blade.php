@extends('layouts.layout_admin')
@section('content')

<div class="wrapper">
  <div class="row">
  <div class="col-sm-12">
    <table class="table table-bordered table-striped table-condensed">
      <thead>
        <?php foreach ($products as $v): ?>
        <tr>
        <th>
          <a href="../../product/show/{!! $v['id']!!}"><strong>{{ $v['name'] }}</strong>
          </a>
        </th>
      </tr>
      <?php endforeach; ?>
      </thead>
      <tbody>
        <tr>
          <td>
          {{ $v['categories']->name }}
          </td>
        </tr>
      </tbody>
  </table>
  </div>
</div>
</div>

@stop
