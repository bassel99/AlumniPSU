<?php

namespace App;

class Alumnidata extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
