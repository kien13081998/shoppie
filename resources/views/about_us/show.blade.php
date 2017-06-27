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
                    <a href="{{ url('/about_us/list') }}">Back to the overview</a>
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
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>{!! $abouts->id !!}</td>
                      <td>{!! $abouts->name !!}</td>
                      <td>{!! $abouts->detail !!}</td>
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
