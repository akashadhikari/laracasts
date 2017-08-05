<?php

/*
|--------------------------------------------------------------------------
| Creating a Parent Class to avoid redundancy
|--------------------------------------------------------------------------
|
*/

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	//For MassAssignmentException

    // protected $fillable = ['title', 'body']

    // protected $guarded doesn't allow the fields to get posted

    protected $guarded = [];
}