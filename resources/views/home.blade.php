<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alumni Home</title>
    <link rel="icon" href="/images/logo_only.PNG">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom style -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/css_login.css">
    <link rel="stylesheet" href="/css/navfixed.css">


</head>

<body>
<script>

    $(document).ready(function () {

        $("#changeMajor").on('change', function () {
            var value = $(this).val();
            $.ajax(
                {
                    url: 'changeMajor.php',
                    type: 'POST',
                    data: 'request=' + value,
                    beforeSend: function () {
                        $("#table_alumni").html('Working on...');
                    },
                    success: function (data) {
                        $("#table_alumni").html(data);
                    }

                }
            )
        })
        $("#Nationality").on('change', function () {
            var value = $(this).val();
            $.ajax(
                {
                    url: 'Nationality.php',
                    type: 'POST',
                    data: 'Nationality=' + value,
                    beforeSend: function () {
                        $("#table_alumni").html('Working on...');
                    },
                    success: function (data) {
                        $("#table_alumni").html(data);
                    }

                }
            )
        })

    })


</script>


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
                        <a href="/">
                            <i class="fa fa-home fa-lg"></i> Home
                        </a>
                    </li>

                    <li class="collapsed ">
                        <a href="/logout">
                            <i class="fa fa-user fa-lg"></i> Log Out
                        </a>
                    </li>

                    <li data-toggle="collapse" data-target="#products">
                        <a href="#">
                            <i class="fa fa-gift fa-lg"></i> test
                            <span class="arrow"></span>
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
            <br>
        </div>
        <div class="col-sm-12 col-lg-3">
            <a href="/addAlumni">
                <button type="button" class="btn btn-info ">+ New Alumnu</button>
            </a>
        </div>

        <div class="col-sm-12 col-lg-3">
            <form>
                <select class="form-control" id="changeMajor" name="changeMajor"">
                <option value=" " disabled selected>Major..</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Communications Engineering">Communications Engineering</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Finance">Finance</option>
                <option value="Marketing">Marketing</option>
                <option value="Information Systems">Information Systems</option>
                </select>


            </form>
            <br>
        </div>


        <div class="col-sm-12 col-lg-3">
            <form>
                <select class="form-control" id="Nationality" name="Nationality"">
                <option value=" " disabled selected>Nationality..</option>
                <option value="Saudi">Saudi Arabia</option>
                <option value="Syrian">Syrian</option>
                <option value="Jordanian">Jordanian</option>
                <option value="Lebanese">Lebanese</option>
                <option value="Yemen">Yemen</option>
                <option value="Palestinian">Palestinian</option>
                </select>


            </form>
            <br>
        </div>


        <div class="col-sm-10 col-lg-12">
            <div id="table_alumni" class="table-responsive">
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

                    @foreach($alumnus as $alumni)

                        <tr>

                            <td>{{ $alumni->id }}</td>
                            <td>{{ $alumni->englishName }}</td>
                            <td>{{ $alumni->major }}</td>
                            <td>{{ $alumni->GPA }}</td>
                            <td>{{ $alumni->nationality }}</td>
                            <td>{{ $alumni->graduation_year }}</td>
                            <td>{{ $alumni->contactNumbers }}</td>
                            <td>{{ $alumni->email }}</td>

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