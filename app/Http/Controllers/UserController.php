<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\user;
class UserController extends Controller
{
    //
    public function Userlogin(){
        return view ('frontend.user-login');
    }



    public function UserloginPost(Request $request){
       
    
        if ($this->attemptLogin($request)) {
            return back()->with('success_message','congrats you login successfully ');
        }else{
            return back()->with('error_message','try again');
        }
       
   
    }
    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }


protected function guard(){
    return Auth::guard();
}

public function username()
{
    return 'email';
}

















    public function userRegister(){
        return view ('frontend.user_register');
    }








    public function logout(Request $request) {
        Auth::logout();
        return redirect('/user-login');
      }









    public function userRegisterStor(Request $request){
  
        $user              =            new user ();
        $user->name        =            $request->name;
        $user->email       =            $request->email;
        $user->password    =            Hash::make($request->password);
        $user->type        =            'customer';

         $result           =             $user->save();

         if ($result){
            return back()->with('success_message','congrats your registration successfully complete');
        }
         else{
        return back()->with('error_message','try again');
         }
    }



}
