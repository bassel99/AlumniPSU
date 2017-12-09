<?php

namespace App\Http\Controllers;

use App\Alumnidata;
use App\Pendingalumnu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    public function __construct()
    {
        //$this->middleware('guest')->except('destroy');
    }


    public function create()
    {
        //todo: it is better to redirect somehow from middleware from the constructor
        if (Auth::check())
            // The user is logged in...
            return redirect('/');

        return view('registration.create');
    }

    /**
     * Register the data in the database..
     */
    public function store()
    {
        if (Auth::check())
            // The user is logged in...
            return redirect('/');

        //validate the form
        $this->validate(request(), [
            'ArabicName' => 'required',
            'englishName' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'major' => 'required',
            'grad_year' => 'required',
            'GPA' => 'required',
            'nationality' => 'required',
            'institCoop' => 'required',
            'currentEmployer' => 'required',
            'contactNumbers' => 'required',
        ]);

        // create and store the user
        // These two will be required two time in this method,
        //in creating new alumni entry, and in creating the corresponding user
        $arabName = request('ArabicName');
        $email = request('email');

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
            'contactNumbers' => request('contactNumbers'),
            'password' => bcrypt(request('password'))
        ]);

        //todo: if the data is added to alumni table, but for some reason it
        //is not added to the User table, then discard the data


        //todo: redirect to wait for approval of the university page
        return redirect('/waitForApproval');
    }





    //I overrode this method in order to disable
    //auto login after registration
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

}
