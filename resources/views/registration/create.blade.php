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

                <div class="form-group">Full Name
                    <input type="text" class="form-control input-lg" placeholder="Full Name" name="name"/>
                </div>

                <div class="form-group">E-mail
                    <input type="email" class="form-control input-lg" placeholder="Email" name="email"/>
                </div>

                <div class="form-group">Username
                    <input type="text" class="form-control input-lg" placeholder="Username" name="username"/>
                </div>
                <div class="form-group">Password
                    <input type="password" class="form-control input-lg" placeholder="Password" name="password"/>
                </div>
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