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
                    <a href="{{ url('/about_us/list') }}">Back to the overview</a>
                 </span>
    </header>
    <div class="panel-body">
        <section id="unseen">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                <tr>
                  <th>name</th>
                  <th>detail</th>
                  <th>tool</th>

                </tr>
                </thead>
                <tbody>
                  <?php foreach ($abouts as $k => $v ): ?>
                    <tr>
                      <td>{!! $v['name'] !!}</td>
                      <td>{!! $v['detail'] !!}</td>
                    <td>
                      <a href="../about_us/edit/{!! $v['id'] !!}">edit</a>
                      <a href="../about_us/destroy/{!! $v['id']!!}">delete</a>
                      <a href="../about_us/show/{!! $v['id']!!}">show</a>

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
