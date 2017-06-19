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
                  <th>
                    categories
                  <?php foreach ($categories as $key => $value): ?>
                  [(id->{!! $value['id'] !!}/{!! $value['name'] !!})]-
                  <?php endforeach; ?></th>


                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>{!! $products->id !!}</td>
                      <td>{!! $products->name !!}</td>
                      <td>{!! $products->detail !!}</td>
                      <td>{!! $products->size !!}</td>
                      <td>{!! $products->images !!}</td>
                      <td>{!! $products->color !!}</td>
                      <td>{!! $products->quantity !!}</td>
                      <td>{!! $products->sale !!}</td>
                      <td>{!! $products->price !!}</td>
                      <td>{!! $products->categories_id !!}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</section>
</div>
</div>
</div>
@stop
