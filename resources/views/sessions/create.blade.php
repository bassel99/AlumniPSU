<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="icon" href="/public/images/logo_only.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom style -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/css_login.css">
</head>

<body>
<?php
/*
include 'include/include.php';
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * from users ";
    $result = mysqli_query($conn, $sql);


    while ($row = mysqli_fetch_assoc($result)) {

        if (($row['username'] == $username) && ($row['password'] == $password)) {
            header('Location: home.blade.php');
        } else {
            $message = "Incorrect username or password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }


}*/

?>


<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color:#12416D">
            <h1 class="text-center">
                <img src="/images/logo_hor.png">
            </h1>
        </div>
        <form action="create.blade.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" placeholder="Username" name="username"/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control input-lg" placeholder="Password" name="password"/>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-block btn-lg btn-col" value="Login"
                           class="backcol"/><br>
                    <span class="pull-right"><a href="/Sign_up.blade.php">Register</a></span><span><a
                                href="#">Forgot Password</a></span>
                </div>
            </div>
        </form>
    </div>
</div>

</body>


</html>