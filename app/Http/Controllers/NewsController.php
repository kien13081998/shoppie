<?php

namespace shoppie\Http\Controllers;

use update;
use Input;
use shoppie\News;
use Illuminate\Http\Request;
use DB, Session, Crypt, Hash;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $news = News::all();

      return view('news.list')->with('news' , $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('news.create');
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
        'detail' => 'required|string|min:55'
          ]);
        $file = $request->file('images');
        $file->move(Storage_path('uploads/news'));
        $news = $request->all();;
        $news = News::create($news);
      return redirect('news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
      // echo "<pre>";
      // print_r($news);
      // echo "</pre>";
      // exit;
        return view('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        // $id = $news->id;
        // $News = News::find($id);
        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shoppie\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
      $id= $news->id;
      $news = News::find($id);
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'detail' => 'required|string|min:55'
      ]);
      $file = $request->file('images');
      $file->move(Storage_path('uploads/news'));
      // $news = $request->intersect(['name', 'detail']);
      //print_r($news);
      //exit;
      $news->update($request->all());
       return redirect('news');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
      $news->delete();
      return redirect('news');
    }
}
