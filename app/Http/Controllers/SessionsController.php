<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct() {

        // setting up a constructor so tht only the guests can visit the login page

        $this->middleware('guest')->except(['destroy']);

    }

    public function create() {

    	return view('sessions.create');

    }

    public function store() {

    	// attempt to authenticate the user

    	if (!auth()->attempt(request(['email', 'password']))) {

    		return back()->withErrors([

    			'message' => 'Please check your credentials.'
    			
    			]);
    	}

    	return redirect('home');

    	// if not, redirect back

    	// if so, sign them in

    	// redirect to home

    }

    public function destroy() {

    	auth()->logout();

    	return redirect('/');

    }
}
