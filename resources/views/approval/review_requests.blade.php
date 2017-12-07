<!DOCTYPE html>
<html lang="en">

<head>
    <title>Review Requests</title>
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

        <form action="/approveAlumni" method="POST">

            <div class="modal-body">
                <div style="text-align: center;">
                    <h1>Reviwe registred Alumnu</h1>
                </div>

                <div class="form-group">Arabic Name
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Arabic Name" name="Arabic_Name"/>
                </div>

                <div class="form-group">Student ID
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Student ID" name="Student_ID"/>
                </div>

                <div class="form-group">GPA
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="GPA" name="GPA"/>
                </div>

                <div class="form-group">Nationality
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Nationality" name="Nationality"/>
                </div>

                <div class="form-group">Name of Co_op Company
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Name of Co_op Company"
                           name="co-op_company"/>
                </div>

                <div class="form-group">What Happened After training period
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="What Happened After training period" name="after_co-op"/>
                </div>

                <div class="form-group">New Company name
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="New Company name"
                           name="New_Company_name"/>
                </div>

                <div class="form-group">Job Title
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Job Title" name="Job_Title"/>
                </div>

                <div class="form-group">Company contact information
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Company contact information"
                           name="company_contact"/>
                </div>

                <div class="form-group">Employer
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Employer" name="Employer"/>
                </div>

                <div class="form-group">When did you join the company
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="When did you join the company"
                           name="time_join"/>
                </div>

                <div class="form-group">Contact Numbers
                    <input type="text" value="" class="form-control input-lg"
                           placeholder="Contact Numbers "
                           name="contact_numbers"/>
                </div>

                <div class="form-group">Email
                    <input type="email" value="" class="form-control input-lg"
                           placeholder="Email" name="Email"/>
                </div>

                <div class="form-group">
                    <input type="submit" value="" name="submit"
                           class="btn btn-block btn-lg btn-col" value="Register"
                           class="backcol"/><br>

                </div>
            </div>
        </form>
    </div>
</div>


?>

</body>


</html>