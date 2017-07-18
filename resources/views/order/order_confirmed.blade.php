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
               <th>first and last name</th>
               <th>email</th>
               <th>street</th>
               <th>city</th>
               <th>phone</th>
               <th>total price</th>
             </tr>
             </thead>
             <tbody>
               <?php foreach ($order as $k => $v ): ?>
                 <tr style="max-width:20px; ">
                   <td>{!! $v->first_name !!} {!! $v->last_name !!}</td>
                   <td>{!! $v->email !!}</td>
                   <td>{!! $v->street !!}</td>
                   <td>{!! $v->city !!}</td>
                   <td>{!! $v->phone !!}</td>
                   <td>{!! $v->total_price !!}.$</td>
               </tr>
             <?php  endforeach; ?>
             </tbody>
         </table>
       </section>
     </div>
     </div>
 </section>
 </div>
 </div>
 </div>
@stop
