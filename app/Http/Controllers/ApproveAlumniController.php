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
        Pendingalumnu::create([
            'id' => request('uniID'),
            'englishName' => request('englishName'),
            'arabName' => $arabName,
            'major' => request('major'),
            'GPA' => request('GPA'),
            'nationality' => request('nationality'),
            'graduation_year' => request('grad_year'),
            'email' => $email,
            'companyCoop' => request('institCoop'),
            'afterGraduation' => request('afterGraduation'),
            'timeForJob' => request('timeForJob'),
            'employer' => request('currentEmployer'),
            'employerContactInfo' => request('employerContactInfo'),
            'jobTitle' => request('jobTitle'),
            'contactNumber' => request('contactNumbers'),
            'password' => bcrypt(request('password'))
        ]);


        //todo: receive fields values from approve_new_alumni
        User::create([
            'name' => request('arabName'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
    }

}
