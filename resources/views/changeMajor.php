<?php

namespace App\Http\Controllers;

use App\Alumnidata;

$request = $_POST['request'];


//include '/include.php';
//$sql = "SELECT * FROM database_alumni1 where major='$request' ";
$alumnus = Alumnidata::latest()->where('major', $request)->get();




    echo '

    <table class="table table-striped table-hover" style="background-color:white ">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>GPA</th>
            <th>Major</th>
            <th>Nationality</th>
            <th>Graduation</th>
            <th>Phone Number</th>
            <th>Email</th>

        </tr>
        </thead>
        <tbody id="changed">
        ';


        foreach ($alumnus as $alumni) {


            echo "
            <tr>
                <td>" . $alumni->id . "</td>
                <td>" . $alumni->englishName . "</td>
                <td>" . $alumni->major . "</td>
                <td>" . $alumni->GPA . "</td>
                <td>" . $alumni->nationality . "</td>
                <td>" . $alumni->graduation_year . "</td>
                <td>" . $alumni->contactNumbers . "</td>
                <td>" . $alumni->email . "</td>
            </tr>                
            ";
        }

        echo '
        </tbody>
    </table>
    ';
