<?php

namespace App\Http\Controllers;

use App\Alumnidata;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alumnus = Alumnidata::latest()->get();

        return view('home', compact('alumnus'));
    }

}
