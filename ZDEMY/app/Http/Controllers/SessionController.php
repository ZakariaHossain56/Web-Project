<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(){
        //validate the request
            $attributes=request()->validate([
             'email'=>'required|exists:users,email',
             'password'=>'required'
         ]);


        //attempt to authenticate and log in the user based on the provided credentials

          if(auth()->attempt($attributes)){
            //redirect with a flash message
             return redirect('/home')->with('success','You have been logged in successfully.');
         }

         //If authentication fails
         return back()
        ->withInput()
        ->withErrors(['email'=>'Your provided credentials could not be verified']);



        // $val = User::where('email',$req['email'])->where('password',$req['password'])->get();

        // if($val->count()==1){
        //     return redirect('/home');
        // }


    }

    public function destroy(Request $request){
    //   ddd('log the user out');
    auth()->logout();
    return redirect('/home')->with('success','You have been logged out successfully.');
    }

}
