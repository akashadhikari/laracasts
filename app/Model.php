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
    protected $guarded = [];
}