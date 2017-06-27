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
                    <a href="{{ url('/blog/list') }}">Back to the overview</a>
                 </span>
    </header>
    <div class="panel-body">
        <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>intro short</th>
                  <th>images</th>
                  <th>detail</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  // echo "<pre>";
                  // print_r($blog);
                  // echo "</pre>";
                    // foreach($blog as $k => $v ): ?>
                    <tr>
                      <td>{!! $blog->id !!}</td>
                      <td>{!! $blog->name !!}</td>
                      <td>{!! $blog->intro_short !!}</td>
                      <td>{!! $blog->images !!}</td>
                      <td>{!! $blog->detail !!}</td>
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
