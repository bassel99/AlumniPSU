<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumni Home</title>
    <link rel="icon" href="/images/logo_only.PNG">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- -->
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/css_login.css">


</head>


<body>

<div class="row">
    <div class="col-sm-3 col-lg-2">
        <div class="nav-side-menu">
            <div class="brand" style="color: #1091B9">
                <div style="text-align: center;">
                    <img src="/images/logo_only.PNG">
                    <br>
                    <h3 style="color:white">Prince Sultan University</h3>
                    <p style="color:white">Alumni Database</p>
                </div>
            </div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li class="collapsed active">
                        <a href="Index.php">
                            <i class="fa fa-home fa-lg"></i> Home
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-9 col-lg-10">

        <br>
        <div class="col-sm-12 col-lg-3">
            <form action="#" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <br></div>
        <div class="col-sm-12 col-lg-3"></div>


        <div class="col-sm-10 col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover" style="background-color:white ">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Major</th>
                        <th>GPA</th>
                        <th>Nationality</th>
                        <th>Graduation</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($pendingAlumnus as $pending)

                        <tr>

                            <td>{{ $pending->id }}</td>
                            <td>{{ $pending->englishName }}</td>
                            <td>{{ $pending->major }}</td>
                            <td>{{ $pending->GPA }}</td>
                            <td>{{ $pending->nationality }}</td>
                            <td>{{ $pending->graduation_year }}</td>
                            <td>{{ $pending->contactNumber }}</td>
                            <td>{{ $pending->email }}</td>

                            <td>
                                <a href="/pendingAlumnus/{{ $pending->email }}">
                                    <button type="button" class="btn btn-primary "
                                            style="border-radius: 50%;">Review
                                    </button>
                                </a>

                                <a href="">
                                    <button type="button" class="btn btn-danger"
                                            style="border-radius: 50%;">Reject
                                    </button>
                                </a>
                            </td>

                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
</body>


</html>