<!--body wrapper start-->
@extends('layouts.layout_admin')
@section('content')

<div class="wrapper">
<div class="row">
<div class="col-sm-12">
<section class="panel">
    <header class="panel-heading">
        Responsive table
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
    </header>
    <div class="panel-body">
        <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>detail</th>
                  <th>size</th>
                  <th>images</th>
                  <th>color</th>
                  <th>quantity</th>
                  <th>sale</th>
                  <th>price</th>

                </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($products as $k => $v ): ?>
                    <tr>
                      <td>{!! $v['id'] !!}</td>
                      <td>{!! $v['name'] !!}</td>
                      <td>{!! $v['size'] !!}</td>
                      <td>{!! $v['images'] !!}</td>
                      <td>{!! $v['color'] !!}</td>
                      <td>{!! $v['quantity'] !!}</td>
                      <td>{!! $v['sale'] !!}</td>
                      <td>{!! $v['price'] !!}</td>
                    <td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</section>
</div>
</div>
</div>
@stop
