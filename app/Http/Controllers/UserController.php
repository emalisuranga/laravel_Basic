<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;   
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function RegisterUser(Request $request){

        $this->validate($request,[
            'fname'=>'required|max:20',
            'lname'=>'required|max:20',
            'email'=>'required|unique:users',
            'password'=>'required|min:6'
        ]);

        $table = new User();
      
       // return $request->all();
        $table->first_name = $request->input('fname');
        $table->last_name = $request->input('lname');
        $table->email = $request->input('email');
        $table->password = bcrypt($request->input('password'));
        $table->remember_token = $request->input('_token');

       $table->save();
    //    return view('/');
    return redirect()->route('home'); 
    }

    public function LoginUser(Request  $request){
         $data = $request->only('email','password');

         if(Auth::attempt($data)){

            // return redirect()->route('home');       
            return view('home');
         }

         return redirect()->back();
    }

    public function getHome(){
        return view('home');
    }

    public function logOut(){
        Auth::logout();
        Session::flush();

        return redirect('/')->with('message','Logged out');
    }
}
