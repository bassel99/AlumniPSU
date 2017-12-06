<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <link rel="icon" href="/images/logo_only.PNG">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/css_login.css">
</head>

<body>

<?php
/*

include 'include/include.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users ( name,username,email,password) VALUES ('" . $name . "','" . $username . "','" . $email . "','" . $password . "')";
    $result = mysqli_query($conn, $sql);
    header('Location: create.blade.php');
}*/

?>


<div class="container">
    <div class="modal-content">
        <div class="modal-header" style="background-color:#12416D">
            <h1 class="text-center">
                <img src="/images/logo_hor.PNG">
            </h1>
        </div>
        <form action="create.blade.php" method="POST">

            <div class="modal-body">
                <div style="text-align: center;"><h1>Register New User</h1></div>

                <div class="form-group">Full Name In Arabic
                    <input type="text" class="form-control input-lg" placeholder="Full Name In Arabic" name="ArabicName"/>
                </div>

                <div class="form-group">Full Name In English
                    <input type="text" class="form-control input-lg" placeholder="Full Name In English" name="englishName"/>
                </div>

                <div class="form-group">E-mail
                    <input type="email" class="form-control input-lg" placeholder="Email" name="email"/>
                </div>

                <div class="form-group">Password
                    <input type="password" class="form-control input-lg" placeholder="Password" name="password"/>
                </div>

                <div class="form-group">Major
                    <input type="text" class="form-control input-lg" placeholder="Major" name="major"/>
                </div>

                <div class="form-group">Year of graduation
                    <input type="text" class="form-control input-lg" placeholder="Graduation Year" name="grad_year"/>
                </div>

                <div class="form-group">University ID
                    <input type="password" class="form-control input-lg" placeholder="University ID" name="uniID"/>
                </div>

                <div class="form-group">GPA
                    <input type="number" class="form-control input-lg" placeholder="GPA" name="GPA" step="0.01"/>
                </div>

                <div class="form-group">Nationality
                    <input type="text" class="form-control input-lg" placeholder="Nationality" name="nationality"/>
                </div>

                <div class="form-group">Name of the institution Cooperative Education
                    <input type="text" class="form-control input-lg" placeholder="institCoop" name="institCoop"/>
                </div>

                <div class="form-group">Current Employer
                    <input type="text" class="form-control input-lg" placeholder="Current Employer" name="currentEmployer"/>
                </div>

                <div class="form-group">Contact Numbers
                    <input type="text" class="form-control input-lg" placeholder="Contact Numbers" name="contactNumbers"/>
                </div>



                <br>
                <br>
                <br>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-block btn-lg btn-col" value="Sign Up"
                           class="backcol"/><br>
                    <span class="pull-right"><a href="Login.php">Log In</a></span>
                </div>
            </div>
        </form>
    </div>
</div>

</body>


</html>