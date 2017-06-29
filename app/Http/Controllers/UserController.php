<?php

namespace shoppie\Http\Controllers;


use shoppie\Categories;
use shoppie\Users;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use DispatchesJobs, ValidatesRequests;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public   function index(Categories $categories) {
          // if (Auth::check())
          // {
          //    return View::make('index');
          //     // Người dùng đã đăng nhập
          // }else if(){
          //     return View::make('user/login');
          // }else{

            $categories = Categories::all();
            return view('user.login')->with('categories', $categories);
          //}
      }

        public  function login() {

          $email = Input::get('email');
          $password = Input::get('password');

          if (Auth::attempt(array('email' => $email, 'password' => $password)))
          {
              return Redirect::to('/index');
          } else {
              return Redirect::to('/login');
          }
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Categories $categories)
    {
      $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
      return view('user.register')->with('categories', $categories);

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
        'last_name'=> 'required|string|max:255',
        'first_name'=> 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:5|confirmed',
        'phone'=> 'required|max:13',
        'city'=> 'required|string|max:255',
        'street'=> 'required|string|max:255'
      ]);
      $file = $request->file('images');
      $name = time() . '.' . $file->getClientOriginalName();
      $file->move('upload/users', $name);
      $data = $request->all();
      $data['password']= bcrypt('password');
      $data['images']= "upload/users/{$name}";
      Users::create($data);
      // return redirect('user/login');
      return '213sad';

    }

    /**
     * Display the specified resource.
     *
     * @param  \shoppie\Users  $users
     * @return \Illuminate\Http\Response
     */
     public function authenticate()
     {
         if (Auth::attempt(['email' => $email, 'password' => $password])) {
             // Authentication passed...
             return redirect()->intended('dashboard');
         }
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
      $categories = Categories::all();
      return view('user.edit')->with('users', $users)->with('categories', $categories);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \shoppie\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
      // if ($file="") {
        $id = $users->id;
        $users = Users::find($id);
        $this->validate($request, [
          'last_name'=> 'required|string|max:255',
          'first_name'=> 'required|string|max:255',
          'phone'=> 'required|max:13',
          'city'=> 'required|string|max:255',
          'street'=> 'required|string|max:255'
        ]);
        $data = $request->all();
        $users->update($data);
          return "!@#";

      // } else {
      //   $id = $users->id;
      //   $users = Users::find($id);
      //   $this->validate($request, [
      //     'last_name'=> 'required|string|max:255',
      //     'first_name'=> 'required|string|max:255',
      //     'email' => 'required|string|email|max:255|unique:users',
      //     'password' => 'required|string|min:5|confirmed',
      //     'phone'=> 'required|max:13',
      //     'city'=> 'required|string|max:255',
      //     'street'=> 'required|string|max:255'
      //   ]);
      //   $file = $request->file('images');
      //   $name = time() . '.' . $file->getClientOriginalName();
      //   $file->move('upload/users', $name);
      //   $data = $request->all();
      //   $data['password']= bcrypt('password');
      //   $data['images']= "upload/users/{$name}";
      //   $users->update($data);
      //   return "!!!";
      // }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \shoppie\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function editpassword(Users $users)
    {
      $categories = Categories::all();
      return view('user.editpassword')->with('users', $users)->with('categories', $categories);
    }
    public function updatepassword(Request $request, Users $users)
    {
      // if ($file="") {
        $id = $users->id;
        $users = Users::find($id);
        $this->validate($request, [
          'password' => 'required|string|min:5|confirmed',

        ]);
        $data = $request->all();
        $data['password']= bcrypt('password');
        $users->update($data);
          return "!!wdas!";
        }

}
