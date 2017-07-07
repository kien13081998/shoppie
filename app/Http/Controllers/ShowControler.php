<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;
use shoppie\Products;
use shoppie\Categories;
use shoppie\News;
use shoppie\Abouts;
use shoppie\Blogs;
use shoppie\Users;
use Session;

class ShowControler extends Controller
{
      public function myaccount(){
        if(Session::get('id')) {
          $users = Users::where('id',Session::get('id'))->first();
          $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
          return view('user.myaccount')->with('categories', $categories)->with('users',$users);
        } else {
          return redirect('/home');
        }

      }
      public function cart(){

        $categories = Categories::orderBy('id', 'DESC')->take(3)->get();

        return view('shoppie.cart')->with('categories', $categories);
      }
     public function about(){

       $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
       $abouts = Abouts::orderBy('id', 'DESC')->take(6)->get();
       return view('shoppie.about')->with('categories', $categories)->with('abouts',$abouts);

     }
     public function blog(){
       $products = Products::orderBy('id', 'DESC')->take(4)->get();
       $news = News::orderBy('id', 'DESC')->take(4)->get();
       $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
       $blogs = Blogs::orderBy('id', 'DESC')->take(5)->get();
       return view('shoppie.blog')->with('categories', $categories)->with('blogs',$blogs)->with('news', $news)->with('products', $products);

     }

     public function blog_detail(Blogs $blogs ){
       $products = Products::orderBy('id', 'DESC')->take(4)->get();
       $news = News::orderBy('id', 'DESC')->take(4)->get();
       $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
       return view('shoppie.blog_detail')->with('categories', $categories)->with('blogs',$blogs)->with('news', $news)->with('products', $products);

     }
      public function home()
      {
          $products = Products::orderBy('id', 'DESC')->take(3)->get();
          $blogs = Blogs::orderBy('id', 'DESC')->take(3)->get();
          $products_kid = Products::orderBy('categories_id', '1')->take(4)->get();
          $products_men = Products::orderBy('categories_id','2')->take(4)->get();
          $products_women = Products::orderBy('categories_id', '3')->take(4)->get();
          $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
          return view('shoppie.homepage')->with('categories', $categories)->with('products', $products)->with('products_kid',$products_kid)->with('blogs', $blogs)->with('products_men', $products_men)->with('products_women', $products_women);
      }
       public function news()
      {
        $products = Products::orderBy('id', 'DESC')->take(6)->get();
        $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
        $news = News::orderBy('id', 'DESC')->take(5)->get();
        return view('shoppie.news')->with('news' , $news)->with('categories', $categories)->with('products',$products);
      }
      public function news_detail(News $news){
        $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
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
      $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
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
      $products = Products::orderBy('id', 'DESC')->take(3)->get();
      $categories = Categories::with('products')->whereName($name)
      ->first();
      return view('shoppie.product_list')->with('news',$news)->with('categories', $categories)->with('products', $products)->with('products', $categories->products);
    }
}
