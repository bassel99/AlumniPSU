<!DOCTYPE html>
<html>
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

    <style>
        @media (min-width: 768px) {
            .modal-dialog1 {
                width: 1500px;
                margin: auto;

            }

            .dottedP {
                border-left: dotted;

            }

            .modal-content1 {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            }

            .modal-sm1 {
                width: 300px;
            }
        }

    </style>
</head>
<body>
<div class="row" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

    <?php
    include 'include/include.php';
    $sql = "SELECT * FROM database_alumni1 WHERE Id='120000548'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result)
    ?>
    <div class="modal-dialog1" style="">
        <div class="col-lg-4" style=" border-left:  dotted">
            <strong><p style="text-align: center;">Personal Information</p></strong>
            <div class="row">
                <div class="col-lg-5">
                    <p>Name: </p>
                    <p>Nationality: </p>
                    <p>Phones: </p>
                    <p>E-mail:</p>
                </div>
                <div class="col-lg-7">
                    <p><?php echo $row['Name'] ?></p>
                    <p><?php echo $row['Nationality'] ?></p>
                    <p><?php echo $row['Contact_Numbers'] ?></p>
                    <p><?php echo $row['E_Mail'] ?></p>

                </div>

            </div>
        </div>
        <div class="col-lg-4" style=" border-left:  dotted">
            <strong><p style="text-align: center;">Academic Information</p></strong>
            <div class="row">
                <div class="col-lg-5">
                    <p>Academic ID:</p>
                    <p>Major: </p>
                    <p>GPA: </p>
                    <p>Graduation Year:</p>
                </div>
                <div class="col-lg-7">
                    <p><?php echo $row['Id'] ?></p>
                    <p><?php echo $row['major'] ?></p>
                    <p><?php echo $row['GPA'] ?></p>
                    <p><?php echo $row['Graduation_Year'] ?></p>

                </div>
            </div>
        </div>
        <div class="col-lg-4" style=" border-left:  dotted; border-right: dotted">
            <strong><p style="text-align: center;">Career Information</p></strong>

            <div class="row">
                <div class="col-lg-5">
                    <p>Job Title:</p>
                    <p>Current Company: </p>
                    <p>Co-op Company: </p>
                    <p>Company Size:</p>
                </div>
                <div class="col-lg-7">
                    <p><?php echo $row['Job_title'] ?></p>
                    <p><?php echo $row['of_the_company_or_institution_that_hire_him_Place_the_employer'] ?></p>
                    <p><?php echo $row['Name_company_or_institution_Cooperative_Education'] ?></p>
                    <p><?php echo $row['employer'] ?></p>

                </div>
            </div>


        </div>
    </div>
</div>

</body>

</html>