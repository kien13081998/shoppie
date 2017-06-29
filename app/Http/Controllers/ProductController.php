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



        public function __construct()
      {
        $this->middleware('auth');
      }
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
          'detail'=> 'required|string|min:5',
          'size'=> 'required|string',
          'color'=> 'required|string',
          'intro_short'=>'required|string|min:50',
          'brand' => 'required|string',
          'quantity'=> 'required|string',
          'sale'=> 'required|string',
          'price'=> 'required|string'
        ]);

        $file = $request->file('images');
        $name = time() . '.' . $file->getClientOriginalName();
        $file->move('upload/products', $name);
        $data = $request->all();
        $data['images']= "upload/products/{$name}";
        Products::create($data);
        return redirect('product/list');
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
        'name'=> 'required|string|max:255',
        'detail'=> 'required|string:min:5',
        'size'=> 'required|string',
        'intro_short'=>'required|string|min:50',
        'brand' => 'required|string',
        'color'=> 'required',
        'quantity'=> 'required',
        'sale'=> 'required|string',
        'price'=> 'required',
        'categories_id' => 'required'
      ]);
      $file = $request->file('images');
      $name = time() . '.' . $file->getClientOriginalName();
      $file->move('upload/products', $name);
      $data['images']= "upload/products/{$name}";
      $data = $request->all();
      $products->update($data);
      return redirect('product/list');
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
      return redirect('product/list');
    }
}
