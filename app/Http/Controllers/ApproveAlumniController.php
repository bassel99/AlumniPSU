<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

/**
 * Class ApproveAlumniController
 * @package App\Http\Controllers
 *
 * this class is responsible for accepting or rejecting
 * pending alumnus by the admin
 */
class ApproveAlumniController extends Controller
{

    //todo: allow only the admin to access this controller

    public function wait()
    {
        return view('approval.wait_approval');
    }

    public function review()
    {
        return view('approval.review_requests');
    }

    //approve alumni or reject
    public function approve()
    {
        //todo: receive fields values from approve_new_alumni
        User::create([
            'name' => request('arabName'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
    }

}
