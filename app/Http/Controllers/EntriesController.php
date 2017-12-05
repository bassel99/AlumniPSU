<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriesController extends Controller
{

    public function create()
    {
        return view('entry.newEntry');
    }

}
