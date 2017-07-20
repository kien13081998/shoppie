<?php

namespace shoppie\Http\Controllers;

use shoppie\Input;
use shoppie\Categories;
use shoppie\Users;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use DispatchesJobs, ValidatesRequests;
use DB, Session, scrypt , Hash;
use update;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use shoppie\Mail\ContactEmail;


class UserController extends Controller
{
  public function edit(Users $users)
  {
    return view('user.edit')->with('users', $users);
  }
 public function update(Request $request, Users $users)
 {
   $id = $users->id;
   $users = Users::where('id',$id)->first();
   $passuser = $users->password;
   if ($request->hasFile('images')) {
   $this->validate($request, [
     'last_name'=> 'required|string|max:255',
     'first_name'=> 'required|string|max:255',
     'phone'=> 'required|max:13',
     'city'=> 'required|string|max:255',
     'street'=> 'required|string|max:255'
   ]);
   $file = $request->file('images');
   $name = time() . '.' . $file->getClientOriginalName();
   $file->move('upload/users', $name);
   $data = $request->all();
   $data['images']= "upload/users/{$name}";
   $users->update($data);
   return redirect('/my-account')->with('update', 'update thành công ảnh');

 }else {
   $this->validate($request, [
     'last_name'=> 'required|string|max:255',
     'first_name'=> 'required|string|max:255',
     'phone'=> 'required|max:13',
     'city'=> 'required|string|max:255',
     'street'=> 'required|string|max:255'
   ]);
   $data = $request->all();
   $users->update($data);
   return redirect('/my-account')->with('update', 'Update successful');
 }
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  \shoppie\Users  $users
  * @return \Illuminate\Http\Response
  */
    public function sendcontact(Request $request){
      $this->validate($request, [
        'name'=> 'required|string|max:255',
        'email_customer' => 'required|string|email|max:255',
        'phone_customer' => 'required|string|max:20',
        'email' => 'required|string|email|max:255',
        'location' => 'required|string|min:5',
        'message'=> 'required|max:500'
      ]);
      $data = $request->all();
      $email = $data['email'];
       Mail::to($email)->send(new ContactEmail($data));
      return redirect('/contact')->with('contact', 'Thank you for texting us, we will respond soon');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('user.register');
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
        'street'=> 'required|string|max:255',
        'images' => 'required'

      ]);
      $file = $request->file('images');
      $name = time() . '.' . $file->getClientOriginalName();
      $file->move('upload/users', $name);
      $data = $request->all();
      $datapassword= $data['password'];
      $data['password'] =  hash('sha256', $datapassword);
      $data['images']= "upload/users/{$name}";
      Users::create($data);
      return redirect('/user/login');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \shoppie\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function editpassword(Users $users)
    {
      return view('user.editpassword')->with('users', $users);
    }
    public function updatepassword(Request $request, Users $users)
    {
        $id = $users->id;
        $users = Users::find($id);
        $this->validate($request, [
          'password' => 'required|string|min:5|confirmed',
        ]);
        $data = $request->all();
        $datapass= $data['password'];
        $data['password']= hash('sha256', $datapass);
        $users->update($data);
          return redirect('/my-account')->with('update','Update password successful');
        }
}
