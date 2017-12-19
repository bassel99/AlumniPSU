<?php


$request = $_POST['Nationality'];

include 'include/include.php';
$sql = "SELECT * FROM database_alumni1 where Nationality = '$request' ";
$result = mysqli_query($conn, $sql);


echo '
                    
                     <table class="table table-striped table-hover" style="background-color:white " >
                     <thead>
                     <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Major</th>
                    <th>GPA</th>
                    <th>Nationality</th>
                    <th>Graduation</th>
                    <th>Phone Number</th>
                    <th>Email</th>

                     </tr>
                    </thead>
                    <tbody id="changed">
                    
                    
                    ';

while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr><td>" . $row['Id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['major'] . "</td><td>"
        . $row['GPA'] . "</td><td>" . $row['Nationality'] . "</td><td>" . $row['Graduation_Year'] . "</td><td>"
        . $row['Contact_Numbers'] . "</td><td>" . $row['E_Mail'] . "</td></tr>";

}


echo ' </tbody>
                            </table>';

?>
