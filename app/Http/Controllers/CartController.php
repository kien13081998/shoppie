<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
 //  public function store($id)
 // {
 //     if (Request::ajax()) {
 //         $productBuy=\App\ShopProduct::where('id', $id)->first();
 //         Cart::add(['id' =>$productBuy->product->id, 'name' =>$productBuy->product->name, 'qty' => 1, 'price' =>
 //         $productBuy->product->price]);
 //         return response()->json(['count'=>Cart::count()]);
 //     };
 // }
 // public function show()
 // {
 //     $content=Cart::content();
 //     $subtotal=Cart::subtotal();
 //     return view('cart/shopping_cart')->with('content', $content)->with('subtotal', $subtotal);
 // }
 // public function delete($rowId)
 // {
 //     Cart::remove($rowId);
 //     return redirect('cart/show')->withSuccess('Cat has been updated.');
 // }
 // public function update()
 // {
 //     if (Request::ajax()) {
 //         $id=Request::get('id') ;
 //         $qty=Request::get('qty') ;
 //         Cart::update($id, $qty);
 //         return response()->json(['count'=>Cart::count()]);
 //     }
 // }
 public function addCart(Request $request){
   if (Request::ajax()) {
       $productBuy=\App\Products::where('id', $id)->first();
       Carts::create(['id' =>$productBuy->products->id, 'name' =>$productBuy->products->name, 'qty' => 1, 'price' =>
       $productBuy->products->price]);
       return 'asd';
      //  return response()->json(['count'=>Cart::count()]);
   };
    // return response()->json(['price'=> $request->get('price')]);
    //};
 }
}
