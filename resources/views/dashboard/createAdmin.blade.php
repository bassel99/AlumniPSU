<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create new Admin</title>
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


<div class="container">
    <div class="modal-content">
        <div class="modal-header" style="background-color:#12416D">
            <h1 class="text-center">
                <img src="images/logo_hor.png">
            </h1>
        </div>
        <form action="Sign_up.php" method="POST">

            <div class="modal-body">
                <center><h1>Register New Admin</h1></center>

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

                </div>
            </div>
        </form>
    </div>
</div>

</body>


</html>