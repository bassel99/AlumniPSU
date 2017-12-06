<?php

namespace App\Http\Controllers;

use App\Pendingalumnu;
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

        Pendingalumnu::create([
            'name' => request('name'),
            'major' => request('major'),
            'grad_year' => request('grad_year')
        ]);

        //todo: return to wait to home page and display a message 'wait for approval
        return redirect('/');
    }


}
