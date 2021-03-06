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
                    <a href="/product/categories/{!! $value['name'] !!}"> |{!! $value['name'] !!}|</a>
                  <?php endforeach; ?></td>
                </tr>
              </tr>
            </tbody>
          </table>
        </section>
    </div>
</section>
<section class="panel">
    <header class="panel-heading">
        Responsive table
                <span class="tools pull-right">
                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                    <a href="javascript:;" class="fa fa-times"></a>
                 </span>
                 <form action="{!! url('/product/search') !!}" method="get">
                   <input type="text" name="key" placeholder="product name">
                   <button type="submit" >search</button>
                 </form>
    </header>
    <div class="panel-body">
      <section id="unseen">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
              <th>name</th>
              <th>intro short</th>
              <th>sale</th>
              <th>price</th>
              <th>tool</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $k => $v ): ?>
                <tr style="max-width:20px; ">
                  <td>{!! $v['name'] !!}</td>
                  <td>{!! $v['intro_short'] !!}</td>
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
        {{ $products->links() }}
    </div>
</section>
</div>
</div>
</div>
@stop
