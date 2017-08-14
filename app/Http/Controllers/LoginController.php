<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() {

    	

    }

    public function destroy() {

    	auth()->logout();

    	return redirect('/');

    }
}
