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
                  <th>status[(0/an|1/hien)]</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // echo "<pre>";
                  // print_r($categories);
                  // echo "</pre>";
                    // foreach($categories as $k => $v ): ?>
                    <tr>
                      <td>{!! $categories->id !!}</td>
                      <td>{!! $categories->name !!}</td>
                      <td>{!! $categories->status !!}</td>
                    </tr>
                    <?php //endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</section>
</div>
</div>
</div>
@stop
