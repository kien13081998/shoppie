<?php

namespace shoppie\Http\Controllers;
use shoppie\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Validator;
use Auth;


class LoginController extends Controller
{
  public function login()
  {
        $categories = Categories::all();
        return view('shoppie.login')->with('categories', $categories);
  }

}
