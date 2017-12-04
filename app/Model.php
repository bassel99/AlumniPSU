<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //to prevent the user from filling some fields in the database, here it is empty
    //array, so every field is allowed
    protected $guarded = [];
}
