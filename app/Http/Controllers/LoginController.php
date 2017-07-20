<?php

namespace shoppie\Http\Controllers;

use Illuminate\Support\Facades\Input;
use shoppie\Users;
use shoppie\Categories;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use DB, Session, scrypt , Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
        public  function login(Request $request) {

  		$rules = array(
  			'email' => 'required|email', // make sure the email is an actual email
  			'password' => 'required|alphaNum|min:5');
        // kiểm tra tất cả trường
        // Mật khẩu phải lớn hơn 3 ký tự và chỉ có thể là chữ và số và
  			$validator = Validator::make(Input::all() , $rules);
  			// Nếu trình xác nhận thất bại, chuyển hướng trở lại biểu
  			if ($validator->fails())
  				{
  				return Redirect('/user/login')->withErrors($validator) // Gửi lại tất cả các lỗi cho mẫu đăng nhập
  				->withInput(Input::except('password')); // Gửi lại các đầu vào (không phải mật khẩu) để chúng ta có thể repopulate mẫu
  				}
  			  else
  				{
  				// Tạo dữ liệu người dùng của bạn để xác thực
          $email = Input::get('email');
          $passwords = Input::get('password');
          $password =  hash('sha256', $passwords);

          $users = DB::table('users')->select('id','first_name')->where('email', $email)->where('password',$password)->first();
          $newdata = $users;
          if ($newdata != "") {
            Session::put('id',$users->id);
            Session::put('name',$users->first_name);
            return Redirect('/home')->with('newdata', $newdata);
          } else {
    					// xác nhận không thành công, gửi lại cho mẫu
              // Gửi lại tất cả các lỗi cho mẫu đăng nhập
    					return Redirect('/user/login')
      				->with('error', 'The email address or password is incorrect');
      			}
  				}
  			}

      public function index(Categories $categories) {
          $categories = Categories::orderBy('id', 'DESC')->take(3)->get();
          return view('user.login')->with('categories', $categories);
        //}
      }
      function Logout()
      		{
      		Session::flush(); // logging out user
      		return Redirect('home'); // redirection to login screen
      		}
}
