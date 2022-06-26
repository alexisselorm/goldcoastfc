<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'User succesfully logged out');
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate the requests
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        // attempt to authenticate and log in the user
        // based on the provided creds
        if (auth()->attempt($attributes)) {
            // If the auth failed
            throw ValidationException::withMessages(['email'=>'Your provided credentials could not be verified']);
        }
        // If successful, redirect with a succes flash message
        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back');
    }
}
