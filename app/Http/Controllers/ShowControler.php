<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;
use shoppie\Products;
use shoppie\Categories;
use shoppie\News;
use shoppie\Abouts;
use shoppie\Blogs;
use shoppie\Users;

class ShowControler extends Controller
{
      public function myaccount(Users $users){

        $categories = Categories::all();
        return view('user.myaccount')->with('categories', $categories)->with('users',$users);
      }
      public function cart(){

        $categories = Categories::all();

        return view('shoppie.cart')->with('categories', $categories);
      }
     public function about(){

       $categories = Categories::all();
       $abouts = Abouts::orderBy('id', 'DESC')->take(8)->get();
       return view('shoppie.about')->with('categories', $categories)->with('abouts',$abouts);

     }
     public function blog(){
       $products = Products::orderBy('id', 'DESC')->take(4)->get();
       $news = News::orderBy('id', 'DESC')->take(4)->get();
       $categories = Categories::all();
       $blogs = Blogs::orderBy('id', 'DESC')->take(8)->get();
       return view('shoppie.blog')->with('categories', $categories)->with('blogs',$blogs)->with('news', $news)->with('products', $products);

     }

     public function blog_detail(Blogs $blogs ){
       $products = Products::orderBy('id', 'DESC')->take(4)->get();
       $news = News::orderBy('id', 'DESC')->take(4)->get();
       $categories = Categories::all();
       return view('shoppie.blog_detail')->with('categories', $categories)->with('blogs',$blogs)->with('news', $news)->with('products', $products);

     }
      public function home()
      {
          $products = Products::orderBy('id', 'DESC')->take(3)->get();
          $blogs = Blogs::orderBy('id', 'DESC')->take(3)->get();
          $products_new = Products::orderBy('id', 'DESC')->take(4)->get();
          $products_size_big = Products::orderBy('size','XXL')->take(4)->get();
          $products_size_small = Products::orderBy('size', 'XS')->take(4)->get();
          $categories = Categories::all();
          return view('shoppie.homepage')->with('categories', $categories)->with('products', $products)->with('products_new',$products_new)->with('blogs', $blogs)->with('products_size_big', $products_size_big)->with('products_size_small', $products_size_small);
      }
       public function news()
      {
        $products = Products::orderBy('id', 'DESC')->take(6)->get();
        $categories = Categories::all();
        $news = News::orderBy('id', 'DESC')->take(5)->get();
        return view('shoppie.news')->with('news' , $news)->with('categories', $categories)->with('products',$products);
      }
      public function news_detail(News $news){
        $categories = Categories::all();
        $products = Products::orderBy('id', 'DESC')->take(6)->get();
        return view('shoppie.news_detail')->with('news', $news)->with('categories', $categories)->with('products' ,$products);

      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_detail(Products $products)
    {
      $product_list = Products::orderBy('id', 'DESC')->take(4)->get();
      $news = News::orderBy('id', 'DESC')->take(4)->get();
      $categories = Categories::all();
      return view('shoppie.product_detail')->with('products' , $products)->with('categories', $categories)->with('news', $news)->with('product_list', $product_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_name($name)
    {
      $news = News::orderBy('id', 'DESC')->take(4)->get();
      $products = Products::all();
      $categories = Categories::with('products')->whereName($name)
      ->first();
      return view('shoppie.product_list')->with('news',$news)->with('categories', $categories)->with('products', $products)->with('products', $categories->products);
    }
}
