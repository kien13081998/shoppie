<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
  {
    $user = User::all();

    return view('user.list')->with('user' , $user);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('user.create');
  }

}
