<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller

{
    
    public function create() {

    	return view('registration.create');

    }

    public function store(RegistrationRequest $form) {

    	//validate the form IN ReqistrationRequest.php


    	//create and save the user

    	$form->persist();

    	//redirect to the home page

    	return redirect('/');

    }
}
