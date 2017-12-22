<?php

namespace App\Http\Controllers;

use App\Alumnidata;
use Illuminate\Http\Request;

/**
 * Class filtersController
 * @package App\Http\Controllers
 * This class is responsible for filtering the results shown on the screen
 */
class filtersController extends Controller
{

    public function nationality(Request $request)
    {
        $all = 'All';
        if ($request->ajax()) {

            $keywordNationality = $request->searchNationality;
            $keywordMajor = $request->searchMajor;
            $keywordYear = $request->searchYear;

            if ($keywordNationality == $all && $keywordMajor == $all && $keywordYear == $all) {
                //success
                $alumnus = Alumnidata::latest()->get();
            } else if ($keywordNationality !== $all && $keywordMajor == $all && $keywordYear == $all) {
                //success
                $alumnus = Alumnidata::latest()->where('nationality', $keywordNationality)->get();
            } elseif ($keywordNationality !== $all && $keywordMajor == $all && $keywordYear !== $all) {
                //success
                $alumnus = Alumnidata::latest()->where('major', $keywordMajor)->get();
            } else if ($keywordNationality !== $all && $keywordMajor !== $all && $keywordYear == $all) {
                //success
                $alumnus = Alumnidata::latest()->where('year', $keywordYear)->get();
            } else if ($keywordNationality == $all && $keywordMajor !== $all && $keywordYear == $all) {
                //success
                $alumnus = Alumnidata::latest()->where('nationality', $keywordNationality)->where('year', $keywordYear)->get();
            } else if ($keywordNationality == $all && $keywordMajor !== $all && $keywordYear !== $all) {
                //success
                $alumnus = Alumnidata::latest()->where('major', $keywordMajor)->where('year', $keywordYear)->get();
            } else if ($keywordNationality == $all && $keywordMajor == $all && $keywordYear !== $all) {
                //success
                $alumnus = Alumnidata::latest()->where('year', $keywordYear)->get();
            } else {
                $alumnus = Alumnidata::latest()->where('nationality', $keywordNationality)->where('major', $keywordMajor)->where('year', $keywordYear)->get();
            }

            return Response($this->designBluePrint($alumnus));
        }
        return null;
    }



    public function graduationYear()
    {

    }

    public function designBluePrint($alumnus)
    {
        $output = '';
        foreach ($alumnus as $key => $alumni) {

            $output .= '<tr>' .

                '<td>' . $alumni->id . '</td>' .

                '<td>' . $alumni->englishName . '</td>' .

                '<td>' . $alumni->major . '</td>' .

                '<td>' . $alumni->GPA . '</td>' .
                '<td>' . $alumni->nationality . '</td>' .

                '<td>' . $alumni->graduation_year . '</td>' .

                '<td>' . $alumni->contactNumbers . '</td>' .

                '<td>' . $alumni->email . '</td>' .

                '</tr>';
        }
        return $output;
    }

}
