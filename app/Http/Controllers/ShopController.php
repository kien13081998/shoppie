<?php

namespace shoppie\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use shoppie\Users;
use shoppie\Products;
use shoppie\Orders;
use shoppie\Order_products;
use Session;
use DB;
use Join;
use Cart;
use Mail\UserEmail;
use Illuminate\Support\Facades\Mail;
class ShopController extends Controller
{

    public function order(){
      $subtotal = Cart::subtotal();
      $user_id =  Session::get('id') ;
      $Order = new Orders;
      $Order->user_id= $user_id;
      $Order->status = 0;
      $Order->total_price = $subtotal;
      $Order->save();
      $content =Cart::content();
      $Users = Users::where('id',$user_id)->get();
      Mail::to($request->email)->send(new UserEmail($Order,$Users));
      foreach ($content as $contents){
        $Order_products = new Order_products;
        $Order_products->qty = $contents->qty;
        $Order_products->product_id = $contents->id;
        $Order_products->order_id = $Order->id;
        $Order_products->save();
      }
      Cart::destroy();
      return redirect('/')->withSuccess('Thank you, Order');
    }
    public function activateOrder($id)
    {
        $order = Orders::find($id);
        $order->status = 1;
        $order->save();
        return redirect('/')
            ->withSuccess('Thank you check Order.');
    }
    public function store(Request $request){
      if(Request::ajax()){
      $productBuy = Products::where('id',Input::get('pid'))->first();
       Cart::add([
         'id' => $productBuy->id,
         'name' => $productBuy->name,
         'qty' => 1,
         'price' => $productBuy->sale,
         'options' => [
           'img' => $productBuy->images,
           'brand' => $productBuy->brand,
           'unit_price' =>$productBuy->price]
           ]);
        return response()->json([
           'count'=>Cart::count()
          ]);
        }
    }
    // public function storeQty()
    // {
    //     if (Request::ajax()) {
    //         $qty=Request::get('qty') ;
    //         $productBuy= Products::where('id', Input::get('pid'))->first();
    //         Cart::add([
    //           'id' => $productBuy->id,
    //           'name' => $productBuy->name,
    //           'qty' => $qty,
    //           'price' => (floatval($productBuy->sale)),
    //           'options' => [
    //             'img' => $productBuy->images,
    //             'brand' => $productBuy->brand,
    //             'unit_price' =>(floatval($productBuy->price))]
    //          ]);
    //         return response()->json(['count'=>Cart::count()]);
    //     };
    // }
    public function update()
    {
        if (Request::ajax()) {
            $id=Request::get('id') ;
            $qty=Request::get('qty') ;
            Cart::update($id, $qty);
            return response()->json(['count'=>Cart::count()]);
        }
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect('/show');
    }
    public function show() {
      $content=Cart::content();
      $subtotal=Cart::subtotal();
      return view('shoppie.cart_shop')->with('content', $content)->with('subtotal', $subtotal);
    }
}
