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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

        <form action="/approveAlumni/{{ $pendingalumnu->sequence }}" method="POST">

            {{ csrf_field() }}

            <div class="modal-body">

                <div style="text-align: center;">
                    <h1>Review registered Alumni</h1>
                </div>


                <div class="form-group">Full Name In Arabic<i class="required"></i>
                    <input type="text" class="form-control input-lg" placeholder="Full Name In Arabic"
                           name="ArabicName" value="{{ $pendingalumnu->arabName }}" required/>
                </div>

                <div class="form-group">Full Name In English<i class="required"></i>
                    <input type="text" class="form-control input-lg" placeholder="Full Name In English"
                           name="englishName" value="{{ $pendingalumnu->englishName }}" required/>
                </div>

                <div class="form-group">E-mail<i class="required"></i>
                    <input type="email" class="form-control input-lg" placeholder="Email" name="email"
                           value="{{ $pendingalumnu->email }}" required/>
                </div>

                <div class="form-group">Major<i class="required"></i>
                    <input type="text" class="form-control input-lg" placeholder="Major" name="major"
                           value="{{ $pendingalumnu->major}}" required/>
                </div>

                <div class="form-group">Year of graduation<i class="required"></i>
                    <input type="text" class="form-control input-lg" placeholder="Graduation Year" name="grad_year"
                           value="{{ $pendingalumnu->graduation_year }}" required/>
                </div>

                <div class="form-group">University ID<i class="required"></i>
                    <input type="number" class="form-control input-lg" placeholder="University ID" name="uniID"
                           value="{{ $pendingalumnu->id }}" required/>
                </div>

                <div class="form-group">GPA<i class="required"></i>
                    <input type="number" class="form-control input-lg" placeholder="GPA" step="0.01" name="GPA"
                           value="{{ $pendingalumnu->GPA }}" required/>
                </div>

                <div class="form-group">Nationality<i class="required"></i>
                    <input type="text" class="form-control input-lg" placeholder="Nationality" name="nationality"
                           value="{{ $pendingalumnu->nationality }}" required/>
                </div>

                <div class="form-group">Name of the institution Cooperative Education<i class="required"></i>
                    <input type="text" class="form-control input-lg" placeholder="institCoop" name="institCoop"
                           value="{{ $pendingalumnu->companyCoop }}" required/>
                </div>

                <div class="form-group">What happened after graduation
                    <input type="text" class="form-control input-lg" placeholder="What happened after graduation"
                           name="afterGraduation" value="{{ $pendingalumnu->afterGraduation }}"/>
                </div>

                <div class="form-group">Time taken to get a job after graduation
                    <input type="text" class="form-control input-lg"
                           placeholder="Time taken to get a job after graduation" name="timeForJob"
                           value="{{ $pendingalumnu->timeForJob }}"/>
                </div>

                <div class="form-group">Current Employer
                    <input type="text" class="form-control input-lg" placeholder="Current Employer"
                           name="currentEmployer" value="{{ $pendingalumnu->employer }}"/>
                </div>

                <div class="form-group">Employer Contact Info
                    <input type="text" class="form-control input-lg" placeholder="Employer Contact Info"
                           name="employerContactInfo" value="{{ $pendingalumnu->employerContactInfo }}"/>
                </div>

                <div class="form-group">Job Title
                    <input type="text" class="form-control input-lg" placeholder="Job Title" name="jobTitle"
                           value="{{ $pendingalumnu->jobTitle }}"/>
                </div>

                <div class="form-group">Contact Numbers
                    <input type="text" class="form-control input-lg" placeholder="Contact Numbers"
                           name="contactNumbers" value="{{ $pendingalumnu->contactNumbers }}"/>
                </div>

                <br>
                <br>

                <div class="form-group">
                    <input type="submit" id="accept" name="submit"
                           class="btn btn-block btn-lg btn-col backcol" value="Accept"/><br>
                </div>
            </div>

            @include('layouts.errors')
        </form>

        <form action="/approveAlumni/{{ $pendingalumnu->sequence }}" method="POST" style="margin-top: -45px">

            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group">
                    <input type="submit" id="reject" name="submit"
                           class="btn btn-block btn-danger btn-lg btn-col" value="Reject"
                           class="backcol"/><br>
                </div>
            </div>

        </form>
    </div>
</div>




</body>


</html>