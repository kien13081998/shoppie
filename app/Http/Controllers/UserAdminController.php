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
class UserAdminController extends Controller
{
        public function __construct()
      {
        $this->middleware('auth');
      }
  public function create_user()
  {
    return view('user.create');

  }

  public function create_store(Request $request)
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
    return redirect('user/list');

  }
  public function edit_user(Users $users){
    return view('user.edit_user')->with('users', $users);
  }
  public function update_user(Request $request, Users $users){
    $id = $users->id;
    $users = Users::where('id',$id)->first();
    $passuser = $users->password;
    if ($request->hasFile('images')) {
    $this->validate($request, [
      'last_name'=> 'required|string|max:255',
      'first_name'=> 'required|string|max:255',
      'phone'=> 'required|max:13',
      'password' => 'confirmed',
      'city'=> 'required|string|max:255',
      'street'=> 'required|string|max:255'
    ]);
    $file = $request->file('images');
    $name = time() . '.' . $file->getClientOriginalName();
    $file->move('upload/users', $name);
    $data = $request->all();
    if ($data['password']) {
      $pasdata = $data['password'];
      $data['password'] =  hash('sha256' ,$pasdata);
    }else{
      $data['password'] =  $passuser;
    }
    $data['images']= "upload/users/{$name}";
    $users->update($data);
    return redirect('user/list');
  }else {
    $this->validate($request, [
      'last_name'=> 'required|string|max:255',
      'first_name'=> 'required|string|max:255',
      'phone'=> 'required|max:13',
      'password' => 'confirmed',
      'city'=> 'required|string|max:255',
      'street'=> 'required|string|max:255'
    ]);
    $data = $request->all();
    if($data['password']){
      $pasdata = $data['password'];
      $data['password'] =  hash('sha256' ,$pasdata);
    }else{
      $data['password'] =  $passuser;

    }
    $users->update($data);
    return redirect('user/list');
  }
  }
  public function list(){
    $users = Users::orderBy('id', 'DESC')->get();
    return view('user.list')->with('users' , $users);
    }
  public function destroy(Users $users)
  {
    $users->delete();
    return redirect('user/list');
  }
}
