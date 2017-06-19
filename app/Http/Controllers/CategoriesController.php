<?php

namespace shoppie\Http\Controllers;

use shoppie\Categories;
use Illuminate\Http\Request;
use DB, Session, Crypt, Hash;
use update;
use Input;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Categories::all();

      return view('categories.list')->with('categories' , $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
        'name' => 'required|string|max:255',
        'status' => 'required'
          ]);
        $categories = $request->intersect(['name', 'status']);
        $categories = Categories::create($categories);
      return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
      return view('categories.edit')->with('categories', $categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shoppie\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
      $id= $categories->id;
      $categories = Categories::find($id);
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'status' => 'required|string|max:555'
      ]);
      // $categories = $request->intersect(['name', 'status']);
      //print_r($categories);
      //exit;
      $categories->update($request->all());
       return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
      $categories->delete();
      return redirect('categories');
    }
}
