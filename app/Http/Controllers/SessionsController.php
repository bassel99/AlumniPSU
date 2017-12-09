<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        //todo: it is better to redirect somehow from middleware from the constructor
        if (Auth::check())
            // The user is logged in...
            return redirect('/');
        return view('sessions.create');
    }

    public function store()
    {
        //todo: it is better to redirect somehow from middleware from the constructor
        if (Auth::check())
            // The user is logged in...
            return redirect('/');
        // Attempt to authenticate the user and sign in
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message'=>'Please check your credentials and try again.'
            ]);
        }

        // if so, Redirect to the home page
        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }

}
