<?php

namespace shoppie\Http\Controllers;

use Input;
use Request;
use shoppie\Users;
use shoppie\Products;
use shoppie\Orders;
use shoppie\Order_products;
use Session;
use DB;
use Join;
use Cart;

class CartController extends Controller
{
   public function showcart(){
     if (Session::get('id')) {
       $data = DB::table('orders_products')
       ->join('orders' , 'orders_products.order_id' , '=' , 'orders.id')
       ->join('products' , 'orders_products.product_id' , '=' , 'products.id')
       ->where('user_id', Session::get('id'))
       ->get();
       return view('shoppie.cart')->with('data', $data);
     } else {
       return Redirect('/home')->with('err', 'login to cart');
     }
   }

}
