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
use shoppie\Mail\UserEmail;
use shoppie\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
  public function order(){
    $subtotal = Cart::subtotal();
    $user_id =  Session::get('id') ;
    $Users = Users::where('id',$user_id)->first();
    $email = $Users->email;
    $Order = new Orders;
    $Order->user_id= $user_id;
    $Order->status = 0;
    $Order->total_price = $subtotal;
    $Order->save();
    $content =Cart::content();
    Mail::to($email)->send(new UserEmail($Order,$Users));
    foreach ($content as $contents){
      $Order_products = new Order_products;
      $Order_products->qty = $contents->qty;
      $Order_products->product_id = $contents->id;
      $Order_products->order_id = $Order->id;
      $Order_products->save();
    }
    Cart::destroy();
    return redirect('/show')->with('order', 'Thank you for ordering, we will send your gmail notification, please confirm');
  }
  public function activateOrder($id)
  {
      $order = Orders::find($id);
      $order->status = 1;
      $order->save();
      return redirect('/show')
          ->with('order', 'Thank you for ordering.');
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
  public function sendcontact(){
    if(Request::ajax()){
    // $data = Request::get('data');
    print_r(Request::ajax());
    exit;
    // Mail::to('kien13081998@gmail.com')->send(new ContactEmail());
  }
  return response()->json([
     'data'=>Request::get('data'),
    ]);
  }

}
