<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumnu Information</title>
    <link rel="icon" href="images/logo_only.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <!-- -->


    <link rel="stylesheet" href="css/css_login.css">
    <link rel="stylesheet" href="css/navfixed.css">


</head>


<body>


<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body" style="background-color:#12416D">

            <?php
            include 'include/include.php';
            $sql = "SELECT * FROM database_alumni1 WHERE Id='120000548'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result)


            ?>

            <div id="pp">
                <p id="infor">Name:</></p>
                <p><?php echo $row['Name']; ?></p>

                <p id="infor">ID:</p>
                <p><?php echo $row['Id']; ?></p>

                <p id="infor">Major:</p>
                <p><?php echo $row['major']; ?></p>

                <p id="infor">Nationality:</p>
                <p><?php echo $row['Nationality']; ?></p>

                <p id="infor">Graduation Year:</p>
                <p><?php echo $row['Graduation_Year']; ?></p>

                <p id="infor">Co-op Company:</p>
                <p><?php echo $row['Name_company_or_institution_Cooperative_Education']; ?></p>

                <p id="infor">Contact Numbers:</p>
                <p><?php echo $row['Contact_Numbers']; ?></p>

                <p id="infor"> Email:</p>
                <p><?php echo $row['E_Mail']; ?></p>

            </div>
        </div>

    </div>
</div>


</body>

</html>