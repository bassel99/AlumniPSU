<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="icon" href="images/logo_only.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/css_login.css">
</head>


</head>

<body>
<?php


include 'include/include.php';
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * from users ";
    $result = mysqli_query($conn, $sql);


    while ($row = mysqli_fetch_assoc($result)) {

        if (($row['username'] == $username) && ($row['password'] == $password)) {
            header('Location: index.php');
        } else {
            $message = "Incorrect username or password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }


}

?>


<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header" style="background-color:#12416D">
            <h1 class="text-center">
                <img src="images/logo_hor.png">
            </h1>
        </div>
        <form action="login.php" method="post">
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
                    <span class="pull-right"><a href="Sign_up.php">Register</a></span><span><a
                                href="#">Forgot Password</a></span>
                </div>
            </div>
        </form>
    </div>
</div>

</body>


</html>