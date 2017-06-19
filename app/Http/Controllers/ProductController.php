<?php

namespace shoppie\Http\Controllers;
use Input;
use shoppie\Products;
use shoppie\Categories;
use Illuminate\Http\Request;
use DispatchesJobs, ValidatesRequests;
use Illuminate\Http\UploadedFile;

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

      $categories = Categories::all();
      $products = Products::all();
      return view('products.list')->with('products' , $products)->with('categories', $categories);
    }
    public function indexByCategories($name){

      $categories = Categories::with('products')->whereName($name)
      ->first();
      return view('products.index')
          ->with('categories', $categories)
          ->with('products', $categories->products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Categories $categories)
    {
          $categories = Categories::all();
          return view('products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Categories $categories)
    {

      $categories_id = $categories->id;
        $this->validate($request, [
          'name'=> 'required|string|max:255',
          'detail'=> 'required|string|max:555',
          'size'=> 'required|string',
          //'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'color'=> 'required|string',
          'quantity'=> 'required|string',
          'sale'=> 'required|string',
          'price'=> 'required|string'
        ]);
        $file = $request->file('images');
        $file->move(Storage_path('uploads/products'));
        //$products = $request->intersect(['name', 'detail','size','images','color','quantity','sale','price']);
        // print_r($products);
        // exit;
        $products = $request->all();
        // print_r($products);
        // exit;
        $products = Products::create($products);
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        $categories = Categories::all();
        return view('products.show')->with('products', $products)->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products, Categories $categories)
    {
        $categories = Categories::all();
        return view('products.edit')->with('products', $products)->with('categories', $categories);
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
      $id = $products->id;
      $products = Products::find($id);
      $this->validate($request, [
        'name'=> 'required',
        'detail'=> 'required',
        'size'=> 'required',
        'images'=> 'required',
        'color'=> 'required',
        'quantity'=> 'required',
        'sale'=> 'required',
        'price'=> 'required',
        'categories_id' => 'required|string'
      ]);
      $products->update($request->all( ));
      //$products->update(Input::all());

      return redirect('product');
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
