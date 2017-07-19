<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;
use shoppie\Users;
use shoppie\Orders;
use shoppie\Orders_products;
use DB, Session;

class OrderController extends Controller
{
   public function orderhistory(){
       $data = DB::table('orders_products')
       ->join('orders' , 'orders_products.order_id' , '=' , 'orders.id')
       ->join('products' , 'orders_products.product_id' , '=' , 'products.id')
       ->where('user_id', Session::get('id'))
       ->where('status','=', '1')
       ->get();
       $data1 = DB::table('orders_products')
       ->join('orders' , 'orders_products.order_id' , '=' , 'orders.id')
       ->join('products' , 'orders_products.product_id' , '=' , 'products.id')
       ->where('user_id', Session::get('id'))
       ->where('status', '=' , '0')
       ->get();
       return view('user.cart')->with('data', $data)->with('data1', $data1);
   }
   public function orderlist(){
     $order = DB::table('orders')
     ->join('users', 'orders.user_id', '=', 'users.id')
     ->where('status', 1)
     ->get();
     return view('order.order_confirmed')->with('order', $order);

   }
   public function orderlistnot(){
     $order = DB::table('orders')
     ->join('users', 'orders.user_id', '=', 'users.id')
     ->where('status', 0)
     ->get();
     return view('order.order_not_confirmed')->with('order', $order);
   }
   public function destroy(Orders $order)
   {
     $order = Orders::find($order->id);
     $order->delete();
     return redirect('/list-order');
   }
}
