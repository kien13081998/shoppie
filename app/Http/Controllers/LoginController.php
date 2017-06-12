<?php

namespace shoppie\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;


class LoginController extends Controller
{
  public function viewLogin() {
return view('login/login');
}
public function checkLogin(Request $request) {
$rules = [
  'email' =>'required|email',
  'password' => 'required|min:5'
];
$messages = [
  'email.required' => 'Email là trường bắt buộc',
  'email.email' => 'Email không đúng định dạng',
  'password.required' => 'Mật khẩu là trường bắt buộc',
  'password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
];
$validator = Validator::make($request->all(), $rules, $messages);
// print_r($request);
//
// exit;
if ($validator->fails()) {
  return redirect()->back()->withErrors($validator)->withInput();
} else {
  $email = $request->input('email');
  $password = $request->input('password');

  if( Auth::attempt(['email' => $email, 'password' =>$password])) {
    return redirect()->view('admin/admin');
  } else {
    $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    return redirect()->back()->withInput()->withErrors($errors);
  }
}
}
}
