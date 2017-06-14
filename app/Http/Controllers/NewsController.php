<?php

namespace shoppie\Http\Controllers;

use Input;
use shoppie\News;
use Illuminate\Http\Request;

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
        'name' => 'required|string|max:50',
        'detail' => 'required|string|max:255'
      ]);
        $news = $request->intersect(['name', 'detail']);
        $news = News::create();
        // print_r($news);
        // exit;
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
        // echo '</pre>'    ;
        // print_r($news);
        // echo '</pre>';
        // exit;
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
      $this->validate($request, [
        'name' => 'required|string|max:50',
        'detail' => 'required|string|max:255'
      ]);
      $news = $request->intersect(['name', 'detail']);
      $news = News::update();
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
