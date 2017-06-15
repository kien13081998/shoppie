<?php

namespace shoppie\Http\Controllers;
use Input;
use shoppie\Products;
use Illuminate\Http\Request;
use DispatchesJobs, ValidatesRequests;

class ProductController extends Controller
{



  /**
   * {@inheritdoc}
   */
  // protected function formatValidationErrors(Validator $validator)
  // {
  //     return $validator->errors()->all();
  // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = products::all();

      return view('products.list')->with('products' , $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
          'name'=> 'required|string|max:255',
          'detail'=> 'required|string|max:555',
          'size'=> 'required|string|',
          'images' => 'required',
          'color'=> 'required|string',
          'quantity'=> 'required|string',
          'sale'=> 'required|string',
          'price'=> 'required|string',
        ]);
        $file = $request->file('images');
        $name = time().$file->getClientOriginalName();
        $file->move('images/client', $name);

   $project->photo = "images/client/{$name}";
        $products = $request->intersect(['name', 'detail','size','images','color','quantity','sale','price']);
        // or $product = $required->all();
        // print_r($products);
        // exit;
        $products = Products::create($products);
        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shoppie\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
      $this->validate($request, [
        'name'=> 'required',
        'detail'=> 'required',
        'size'=> 'required',
        'images'=> 'required',
        'color'=> 'required',
        'quantity'=> 'required',
        'sale'=> 'required',
        'price'=> 'required',
      ]);
      $products->update(Input::all());

      return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
      $products->delete();
      return redirect('products');
    }
}
