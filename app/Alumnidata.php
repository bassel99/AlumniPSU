<?php

namespace App;

class Alumnidata extends Model
{

    protected $primaryKey = 'email'; // or null

    public $incrementing = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
