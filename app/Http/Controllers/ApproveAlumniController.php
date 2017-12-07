<?php

namespace App\Http\Controllers;

use App\Alumnidata;
use App\Pendingalumnu;
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
        return view('approval.review_requests', compact(''));
    }

    public function viewAllPending()
    {
        $pendingAlumnus = Pendingalumnu::all();

        return view('approval.pending_alumnus', compact('pendingAlumnus'));
    }

    //approve alumni or reject logic
    public function approve()
    {
        if (isset($_POST['submit'])) {
            $value = $_POST['submit'];
            if ($value == 'Accept') {

                //validate the form
                $this->validate(request(), [
                    'ArabicName' => 'required',
                    'englishName' => 'required',
                    'email' => 'required|email',
                    'password' => 'required|confirmed',
                    'major' => 'required',
                    'grad_year' => 'required',
                    'uniID' => 'required',
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
                    'timeForJob' => request('timeForJob'),
                    'employer' => request('currentEmployer'),
                    'employerContactInfo' => request('employerContactInfo'),
                    'jobTitle' => request('jobTitle'),
                    'contactNumber' => request('contactNumbers'),
                ]);


                //todo: receive fields values from approve_new_alumni
                User::create([
                    'name' => $arabName,
                    'email' => $email,
                    'password' => bcrypt(request('password'))
                ]);

                //in order for this method to work, email must be as primary key in Pendingalumnu model
                //it is already set as primary key in the Pendingalumnu class
                Pendingalumnu::destroy($email);

                return redirect('/pendingAlumnus');

            }
        }
    }


}

