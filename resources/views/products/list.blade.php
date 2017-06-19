@extends('layouts.layout_admin')
@section('content')
<!--body wrapper start-->
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
              <th>List_Categories</th>
            </thead>
            <tbody>
              <tr>
                <tr>
                  <td><?php foreach ($categories as $key => $value): ?>
                    <a href="product/categories/{!! $value['name'] !!}">{!! $value['name'] !!}</a>||
                  <?php endforeach; ?></td>
                </tr>
              </tr>
            </tbody>
          </table>
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>name</th>
                  <th>details</th>
                  <th>quantity</th>
                  <th>sale</th>
                  <th>price</th>
                  <th>tool</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($products as $k => $v ): ?>
                    <tr>
                      <td>{!! $v['name'] !!}</td>
                      <td>{!! $v['detail'] !!}</td>
                      <td>{!! $v['quantity'] !!}</td>
                      <td>{!! $v['sale'] !!}</td>
                      <td>{!! $v['price'] !!}</td>
                      <!-- <td>{!! $v['categories_id'] !!}</td> -->

                    <td>
                      <a href="product/edit/{!! $v['id'] !!}">edit</a>
                      <a href="product/destroy/{!! $v['id']!!}">delete</a>
                      <a href="product/show/{!! $v['id']!!}">show</a>
                    </td>
                  </tr>
                <?php  endforeach; ?>

                </tbody>
            </table>
        </section>
    </div>
</section>
</div>
</div>
</div>
@stop
