<?php

namespace shoppie\Http\Controllers;

use update;
use Input;
use shoppie\News;
use Illuminate\Http\Request;
use DB, Session, Crypt, Hash;


class NewsController extends Controller
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
      $news = News::orderBy('id', 'DESC')->simplePaginate(3);

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
        'detail' => 'required|string|min:5',
        'intro_short' => 'required|string|min:10'
          ]);
          $file = $request->file('images');
          $name = time() . '.' . $file->getClientOriginalName();
          $file->move('upload/news', $name);
          $news = $request->all();
          $news['images']= "upload/news/{$name}";
          News::create($news);
      return redirect('news/list');
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

      if ($request->hasFile('images')) {
        $this->validate($request, [
          'name' => 'required|string|max:255',
          'detail' => 'required|string|min:5',
          'intro_short' => 'required|string|min:10'
        ]);
        $file = $request->file('images');
        $name = time() . '.' . $file->getClientOriginalName();
        $file->move('upload/news', $name);
        $data = $request->all();
        $data['images']= "upload/news/{$name}";
        $news->update($data);
         return redirect('news/list');
      }else {
        $this->validate($request, [
          'name' => 'required|string|max:255',
          'detail' => 'required|string|min:5',
          'intro_short' => 'required|string|min:10'
        ]);
          $data = $request->all();
          $news->update($data);
          return redirect('news/list');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
      $news = News::find($news->id);
      $news->delete();
      return redirect('news/list');
    }
}
