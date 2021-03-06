<?php

namespace shoppie\Http\Controllers;

use shoppie\Blogs;
use Illuminate\Http\Request;
use DB, Session, scrypt , Hash;


class BlogController extends Controller
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

     public function storecomment(Comment $comment, Request $request)
    {
      if(Session::has()){
        if(Request::ajax()){
        $comment->body = Input::get('comment');
        $comment->user_id = Auth::id();
        $comment->image_id = Input::get('id');
        $comment->save();

        }
      }else{
        return Redirect('/user/login');
      }

    }
    public function index()
    {
      $blog = Blogs::orderBy('id', 'DESC')->get();

      return view('blog.list')->with('blog' , $blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('blog.create');

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
          $name = time() . '.' .$file->getClientOriginalName();
          $file->move('upload/blog', $name);
          $blog = $request->all();
          $blog['images']= "upload/blog/{$name}";
          Blogs::create($blog);
      return redirect('blog/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blogs)
    {
      return view('blog.show')->with('blog', $blogs);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blogs)
    {
      return view('blog.edit')->with('blog', $blogs);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shoppie\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blogs)
    {
      $id= $blogs->id;
      $blogs = Blogs::find($id);
      if ($request->hasFile('images')) {
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'detail' => 'required|string|min:5',
        'intro_short' => 'required|string|min:10'
      ]);
      $file = $request->file('images');
      $name = time() . '.' .$file->getClientOriginalName();
      $file->move('upload/blog', $name);
      $data = $request->all();
        $data['images']= "upload/blog/{$name}";
        $blogs->update($data);
       return redirect('blog/list');
     }else {
       # code...
       $this->validate($request, [
         'name' => 'required|string|max:255',
         'detail' => 'required|string|min:5',
         'intro_short' => 'required|string|min:10'
       ]);
       $data = $request->all();
       $blogs->update($data);
      return redirect('blog/list');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blogs)
    {
      $blogs = Blogs::find($blogs->id);
      $blogs->delete();
      return redirect('blog/list');
    }
}
