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
                <tr>
                  <th>name</th>
                  <th>status[(0/an|1/hien)]</th>
                  <th>tool</th>

                </tr>
                </thead>
                <tbody>
                  <?php foreach ($categories as $k => $v ): ?>
                    <tr>
                      <td>{!! $v['name'] !!}</td>
                      <td>{!! $v['status'] !!}</td>
                    <td>
                      <a href="/categories/edit/{!! $v['id'] !!}">edit</a>
                      <a href="/categories/destroy/{!! $v['id']!!}">delete</a>
                      <a href="/categories/show/{!! $v['id']!!}">show</a>

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
