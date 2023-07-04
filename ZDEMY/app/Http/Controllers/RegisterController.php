<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function showedit($id){
        //dd($id);
        $user=User::find($id);
        return view('editprofile',[
            'user'=>$user
        ]);
    }

    public function create(){
        return view('register');
    }
    public function store(Request $request){
        //return request()->all();
        $attributes = request()->validate([
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'username'=>'required|max:255|min:3|unique:users,username',
            'email'=>'required|max:255|unique:users,email',
            'password'=>'required|min:8|max:255',
            'icon' => 'file|mimes:jpeg,png|max:102400',
            'role'=>'required',
        ]);
        $attributes['password']=bcrypt($attributes['password']);

        // if($request->hasFile('usericon')){
        //     $attributes['usericon']=$request->file('usericon')->store('usericon','public');
        // }
        // dd($attributes['usericon']);
        //dd('success validation');
        if($request->hasFile('icon')){
            $attributes['icon']=$request->file('icon')->store('icon','public');
        }

        $user = User::create($attributes);

        session()->flash('success','Your account has been created');

        return redirect('/home/login');
    }

    public function update(Request $request,User $user){
        //return request()->all();
        $attributes = request()->validate([
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'username'=>'required|max:255|min:3',
            'email'=>'required|max:255',
            'password'=>'required|min:8|max:255',
            'icon' => 'file|mimes:jpeg,png|max:102400',
            'role'=>'required',
        ]);
        $attributes['password']=bcrypt($attributes['password']);

        // if($request->hasFile('usericon')){
        //     $attributes['usericon']=$request->file('usericon')->store('usericon','public');
        // }
        // dd($attributes['usericon']);
        //dd('success validation');
        if($request->hasFile('icon')){
            $attributes['icon']=$request->file('icon')->store('icon','public');
        }

        $user->update($attributes);


        return redirect('/home/login')->with('success','Your account has been updated');
    }
}
