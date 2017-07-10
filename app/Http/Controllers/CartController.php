<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;
use shoppie\Users;
use shoppie\Products;
use shoppie\Orders;
use shoppie\Order_products;
use Session;
use DB;

class CartController extends Controller
{
 public function addCart(Request $request){
   $productBuy = Products::where('id', $request->pid)->first();
     $lastid = Orders::create([
         'user_id' => Session::get('id'),
         'total_price' => 0
      ]);
      $updateorder =  Orders::where('id',$lastid->id)->update(['total_price'=>(floatval($lastid->total_price) + floatval($productBuy->price))]);
      Order_products::create([
        'order_id'=> $lastid->id,
        'product_id'=> $productBuy->id,
        'qty' => 1
      ]);
      $order = Orders::find($lastid->id);
      return response()->json([
        'total'=> $order->total_price,
        'desc' => 1
      ]);
   }
 }
}
