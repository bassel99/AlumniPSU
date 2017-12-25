<!DOCTYPE html>
<html lang="en">

{{--View all pending alumnus here--}}

<head>
    <title>Alumni Home</title>
    <link rel="icon" href="/images/logo_only.PNG">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- -->
    <link rel="stylesheet" href="/css/home.css">
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
                    <li class="collapsed">
                        <i></i>&nbsp; Welcome {{Auth::user()->name}}
                    </li>

                    <li class="collapsed active">
                        <a href="/">
                            <i class="fa fa-home fa-lg"></i> Home
                        </a>
                    </li>

                    <li class="collapsed">
                        <a href="/logout">
                            <i class="fa fa-user fa-lg"></i> Log Out
                        </a>
                    </li>

                    <ul class="sub-menu collapse" id="products">
                        <li class="active">
                            <a href="#">test</a>
                        </li>
                        <li>
                            <a href="#">General</a>
                        </li>
                        <li>
                            <a href="#">Buttons</a>
                        </li>

                    </ul>


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


                    @foreach($pendingAlumnus as $pendingAlumni)

                        <tr>

                            <td>{{ $pendingAlumni->id }}</td>
                            <td>{{ $pendingAlumni->englishName }}</td>
                            <td>{{ $pendingAlumni->major }}</td>
                            <td>{{ $pendingAlumni->GPA }}</td>
                            <td>{{ $pendingAlumni->nationality }}</td>
                            <td>{{ $pendingAlumni->graduation_year }}</td>
                            <td>{{ $pendingAlumni->contactNumbers }}</td>
                            <td>{{ $pendingAlumni->email }}</td>

                            <td>
                                <a href="/pendingAlumnus/{{ $pendingAlumni->sequence }}">
                                    <button type="button" class="btn btn-primary "
                                            style="border-radius: 75%;">Review
                                    </button>
                                </a>

                                <form action="/approveAlumni/{{ $pendingAlumni->sequence }}" method="POST">

                                    {{ csrf_field() }}
                                    <input type="submit" id="reject" name="submit" class="btn btn-danger" value="Reject"
                                           style="border-radius: 75%;"/>
                                </form>

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