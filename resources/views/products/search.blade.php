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
                    <a href="{{ url('/product/list') }}">Back to the overview</a>
                 </span>
    </header>
    <div class="panel-body">
      <section id="unseen">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
              <th>name</th>
              <th>images</th>
              <th>sale</th>
              <th>price</th>
              <th>tool</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $k => $v ): ?>
                <tr style="max-width:20px; ">
                  <td>{!! $v['name'] !!}</td>
                  <td> <img src="{{asset('/').'/'.$v->images}}" alt="" style="with:100px; height:100px;"></td>
                  <td>{!! $v['sale'] !!}</td>
                  <td>{!! $v['price'] !!}</td>
                <td>
                  <a href="../product/edit/{!! $v['id'] !!}">edit</a>
                  <a href="../product/destroy/{!! $v['id']!!}">delete</a>
                  <a href="../product/show/{!! $v['id']!!}">show</a>
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
