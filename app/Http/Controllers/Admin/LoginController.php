<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;


use Auth;

class LoginController extends Controller
{
          // i use it in tinker
        //    public function save() {
        //        $admin = new App\Models\Admin();
        //        $admin->name = "Abdelazem Abdelhamed";
        //        $admin->email = "abdelazem15181996@gmail.com";
        //        $admin->password = bcrypt("12345678");
        //        $admin->save();
        //    }
        public function getLogin() {
           return view('admin.auth.login');
        }
        public function Login(Request $request){

          //if he click remeber me make it true
          $remember_me = $request->has('remember_me') ? true : false;

          $this->validate($request, [


                        'email'                     => 'required',


           ]);

        // dd($request->email);


          if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
              // notify()->success('تم الدخول بنجاح  ');
              return redirect() -> route('admin.dashboard');
          }
          // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
          return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
        }


            public function logout()
       {
           Auth::guard('admin')->logout();
           return redirect('/admin');
       }
}
