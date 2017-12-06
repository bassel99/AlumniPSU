<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('entry.create_entry');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'major' => 'required',
            'grad_year' => 'required'
        ]);
    }


}
