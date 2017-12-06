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
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/css_login.css">
</head>

<body>

<div class="container">
    <div class="modal-content">
        <div class="modal-header" style="background-color:#12416D">
            <h1 class="text-center">
                <img src="/images/logo_hor.PNG">
            </h1>
        </div>
        <form action="/addAlumni" method="POST">

            {{ csrf_field() }}

            <div class="modal-body">
                <div style="text-align: center;">
                    <h1>Register New Alumnu</h1>
                </div>

                <div class="form-group">Full Name
                    <input type="text" class="form-control input-lg" placeholder="Full Name" name="englishName"/>
                </div>

                <div class="form-group">Major
                    <input type="text" class="form-control input-lg" placeholder="Major" name="major"/>
                </div>

                <div class="form-group">Year of graduation
                    <input type="text" class="form-control input-lg" placeholder="Graduation Year" name="grad_year"/>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-block btn-lg btn-col" value="Register"
                           class="backcol"/>

                    <br>

                </div>
            </div>
        </form>
    </div>
</div>

</body>


</html>