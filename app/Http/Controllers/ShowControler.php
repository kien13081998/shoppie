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
          $categories = Categories::orderBy('id', 'DESC')->where('id','<=','3')->get();
          return view('user.myaccount')->with('categories', $categories)->with('users',$users);
        } else {
          return redirect('/home');
        }

      }
     public function about(){
       $abouts = Abouts::orderBy('id', 'DESC')->simplePaginate(4);
       return view('shoppie.about')->with('abouts',$abouts);

     }
     public function trousers(){
       $news =News::orderBy('id', 'DESC')->take(4)->get();
       $products_coats = Products::orderBy('id', 'DESC')->where('categories_id','<=','3')->take(5)->get();
       $trousers_list = Products::orderBy('id', 'DESC')->where('categories_id',5)->simplePaginate(4);
       return view('shoppie.trousers')->with('trousers_list',$trousers_list)->with('news', $news)->with('products_coats',$products_coats);

     }
     public function blog(){
       $products = Products::orderBy('id', 'DESC')->take(4)->get();
       $news = News::orderBy('id', 'DESC')->take(4)->get();
       $blogs = Blogs::orderBy('id', 'DESC')->take(5)->get();
       return view('shoppie.blog')->with('blogs',$blogs)->with('news', $news)->with('products', $products);

     }

     public function blog_detail(Blogs $blogs ){
       $products = Products::orderBy('id', 'DESC')->take(4)->get();
       $news = News::orderBy('id', 'DESC')->take(4)->get();
       return view('shoppie.blog_detail')->with('blogs',$blogs)->with('news', $news)->with('products', $products);

     }
      public function home()
      {
          $products = Products::orderBy('id', 'DESC')->take(3)->get();
          $blogs = Blogs::orderBy('id', 'DESC')->take(3)->get();
          $products_men = Products::orderBy('id','DESC')->where('categories_id',2)->take(4)->get();
          $products_kid = Products::orderBy('id', 'DESC')->where('categories_id',1)->take(4)->get();
          $products_women = Products::orderBy('id', 'DESC')->where('categories_id',3)->take(4)->get();
          return view('shoppie.homepage')->with('products', $products)->with('products_kid',$products_kid)->with('blogs', $blogs)->with('products_men', $products_men)->with('products_women', $products_women);
      }
      public function shoes()
      {
          $news =News::orderBy('id', 'DESC')->take(4)->get();
          $products_coats = Products::orderBy('id', 'DESC')->where('categories_id','<=','3')->take(5)->get();
          $products_shoes = Products::orderBy('id', 'DESC')->where('categories_id',4)->simplePaginate(8);
          return view('shoppie.product_shoes')->with('products_shoes', $products_shoes)->with('products_coats',$products_coats)->with('news', $news);
      }

        public function sale(){
          $sale = Products::orderBy('id', 'DESC')->simplePaginate(4);
          return view('shoppie.sale')->with('sale', $sale);

        }
       public function news()
      {
        $products = Products::orderBy('id', 'DESC')->take(8)->get();
        $news = News::orderBy('id', 'DESC')->simplePaginate(4);
        return view('shoppie.news')->with('news' , $news)->with('products',$products);
      }
      public function news_detail(News $news){
        $products = Products::orderBy('id', 'DESC')->take(6)->get();
        return view('shoppie.news_detail')->with('news', $news)->with('products' ,$products);

      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_detail(Products $products)
    {
      $product_list = Products::orderBy('id', 'DESC')->simplePaginate(4);
      $news = News::orderBy('id', 'DESC')->take(4)->get();
      return view('shoppie.product_detail')->with('products' , $products)->with('news', $news)->with('product_list', $product_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_name($name)
    {
      $news = News::orderBy('id', 'DESC')->take(4)->get();
      $categories = Categories::with('products')->whereName($name)->take(9)->first();
      return view('shoppie.product_name')->with('news',$news)->with('Categories', $categories)->with('products', $categories->products);
    }
}
