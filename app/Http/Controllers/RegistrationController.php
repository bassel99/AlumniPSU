<?php

namespace App\Http\Controllers;

use App\Alumnidata;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('registration.create');
    }

    /**
     * Register the data in the database..
     */
    public function store()
    {
        //validate the form
        $this->validate(request(), [
            'ArabicName' => 'required',
            'englishName' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'major' => 'required',
            'grad_year' => 'required',
            'uniID' => 'required',
            //'GPA' => 'required',
            'nationality' => 'required',
            'institCoop' => 'required',
            'currentEmployer' => 'required',
            'contactNumbers' => 'required',
        ]);


        // create and save the user

        // These two will be required two time in this method,
        //in creating new alumni entry, and in creating the corresponding user
        $arabName = request('ArabicName');
        $email = request('email');

        Alumnidata::create([
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
            'timeForJob' =>\request('timeForJob'),
            'employer' => request('currentEmployer'),
            'employerContactInfo'=> \request('employerContactInfo'),
            'jobTitle' => request('jobTitle'),
            'contactNumber' => request('contactNumbers')
        ]);

        User::create([
            'name' => $arabName,
            'email' => $email,
            'password' => bcrypt(request('password'))
        ]);

        //todo: redirect to wait for approval of the university page
        return redirect('/login');
    }

}
