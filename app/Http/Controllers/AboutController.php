<?php

namespace shoppie\Http\Controllers;

use shoppie\Abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
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
      $abouts = Abouts::orderBy('id', 'DESC')->take(8)->get();
      return view('about_us.list')->with('abouts', $abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('about_us.create');

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
        'detail' => 'required|min:5',
          ]);
          $abouts = $request->all();
          Abouts::create($abouts);
          return redirect('about_us/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\Abouts  $abouts
     * @return \Illuminate\Http\Response
     */
    public function show(Abouts $abouts)
    {
        return view('about_us.show')->with('abouts', $abouts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Abouts  $abouts
     * @return \Illuminate\Http\Response
     */
    public function edit(Abouts $abouts)
    {
        return view('about_us.edit')->with('abouts', $abouts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shoppie\Abouts  $abouts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abouts $abouts)
    {
      $id= $abouts->id;
      $abouts = Abouts::find($id);
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'detail' => 'required|string|min:5',
      ]);
      $data = $request->all();
      $abouts->update($data);
       return redirect('about_us/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\Abouts  $abouts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abouts $abouts)
    {
      $abouts->delete();
      return redirect('about_us/list');
    }
}
