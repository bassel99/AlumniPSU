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
        if ($request->ajax()) {

            $keyword = $request->search;
            if ($keyword === 'All') {
                $alumnus = Alumnidata::latest()->get();
            } else {
                $alumnus = Alumnidata::latest()->where('nationality', $request->search)->get();
            }

            return Response($this->designBluePrint($alumnus));
        }
        return null;
    }

    public function major(Request $request)
    {
        if ($request->ajax()) {

            $keyword = $request->search;
            if ($keyword === 'All') {
                $alumnus = Alumnidata::latest()->get();
            } else {
                $alumnus = Alumnidata::latest()->where('major', $request->search)->get();
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
