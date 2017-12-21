<?php

namespace App\Http\Controllers;

use App\Alumnidata;
use Illuminate\Http\Request;

class filtersController extends Controller
{

    public function nationality(Request $request)
    {
        if ($request->ajax()) {

            $alumnus = Alumnidata::latest()->where('nationality', $request->search)->get();
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
            return Response($output);
        }
        return 'fdsadda';
    }

    public function major()
    {

    }

    public function graduationYear()
    {

    }

}
