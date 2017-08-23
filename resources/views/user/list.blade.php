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
                  <th>id</th>
                  <th>last_name</th>
                  <th>first_name</th>
                  <th>email</th>
                  <th>avatar</th>
                  <th>phone</th>
                  <th>street</th>
                  <th>city</th>
                  <th>tool</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $k => $v ): ?>
                    <tr>
                      <td>{!! $v['id'] !!}</td>
                      <td>{!! $v['last_name'] !!}</td>
                      <td>{!! $v['first_name'] !!}</td>
                      <td>{!! $v['email'] !!}</td>
                      <td><img style="with:40px;height:40px;" src="{{asset('/').'/'.$v['images']}}" alt=""></td>
                      <td>{!! $v['phone'] !!}</td>
                      <td>{!! $v['street'] !!}</td>
                      <td>{!! $v['city'] !!}</td>

                    <td>
                      <a href="../user/edit_user/{!! $v['id'] !!}">edit</a>
                      <!-- <a href="../user/destroy/{!! $v['id']!!}">delete</a> -->
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
