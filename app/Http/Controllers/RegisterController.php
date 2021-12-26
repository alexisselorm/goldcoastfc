<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }

    public function store(){

        
        $attributes= request()->validate([
            'name'=>'required|min:3|max:60',
            'username'=>'required|unique:users,username|min:6|max:25',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:8'
        ]);
      
        $user=User::create($attributes);

        auth()->login($user);

       return redirect('/')->with('success', 'Your account has been created.');

    
    }
}
