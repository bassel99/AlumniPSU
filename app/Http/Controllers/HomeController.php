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

    public function boxInfo(Request $request)
    {
        if ($request->ajax()) {


            $studentID = $request->studentID;
            $alumnus = Alumnidata::latest()
                ->where('id', $studentID)
                ->get();

            return Response($this->designBluePrint($alumnus));
        }
        return null;
    }


    public function designBluePrint($alumnus)
    {
        $output = '';
        foreach ($alumnus as $key => $alumni) {

            $output .= "<div class='row' style=' box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>

    <div class='modal-dialog1' style=''>
        <div class='col-lg-4' style=' border-left:  dotted'>
            <strong><p style='text-align: center;'>Personal Information</p></strong>
            <div class='row'>
                <div class='col-lg-5'>
                    <p>Name: </p>
                    <p>Nationality: </p>
                    <p>Phones: </p>
                    <p>E-mail:</p>
                </div>
                <div class='col-lg-7'>
                    <p>{$alumni->englishName}</p>
                    <p>{$alumni->nationality}</p>
                    <p>{$alumni->contactNumbers}</p>
                    <p>{$alumni->email}</p>

                </div>

            </div>
        </div>
        <div class='col-lg-4' style=' border-left:  dotted'>
            <strong><p style='text-align: center;'>Academic Information</p></strong>
            <div class='row'>
                <div class='col-lg-5'>
                    <p>Academic ID:</p>
                    <p>Major: </p>
                    <p>GPA: </p>
                    <p>Graduation Year:</p>
                </div>
                <div class='col-lg-7'>
                    <p>{$alumni->id}</p>
                    <p>{$alumni->major}</p>
                    <p>{$alumni->GPA}</p>
                    <p>{$alumni->graduation_year}</p>

                </div>
            </div>
        </div>
        <div class='col-lg-4' style=' border-left:  dotted; border-right: dotted'>
            <strong><p style='text-align: center;'>Career Information</p></strong>

            <div class='row'>
                <div class='col-lg-5'>
                    <p>Job Title:</p>
                    <p>Current Company: </p>
                    <p>Co-op Company: </p>
                    <p>Company Size:</p>
                </div>
                <div class='col-lg-7'>
                    <p>{$alumni->title}</p>
                    <p>{$alumni->afterGraduation}</p>
                    <p>{$alumni->companyCoop}</p>
                    <p>{$alumni->employer}</p>

                </div>
            </div>


        </div>
    </div>
</div>";
        }
        return $output;
    }

}
