<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Cart::associate('Product','App')->add($request->id, $request->name, 1, $request->price);
  return redirect('cart')->withSuccessMessage('Item was added to your cart!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  public function store(Request $request)
    //     {
     //
    //     if(isset(Auth::user()->name)){
    //     if (Cart::search([‘id’ => $request->id])) {
    //     return redirect(‘cart’)->withSuccessMessage(‘Item is already in your cart!’);
    //     }
     //
    //     Cart::associate(‘Product’,’App’)->add($request->id, $request->name, 1, $request->price);
    //     return redirect(‘cart’)->withSuccessMessage(‘Item was added to your cart!’);
    //     }else{
    //     Cart::destroy();
    //     return redirect(‘cart’)->withErrorMessage(‘您尚未登入, 請先登入’);
    //     }
     //
    //     }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Cart::remove($id);
  return redirect('cart')->withSuccessMessage('Item has been removed!');
    }
}
