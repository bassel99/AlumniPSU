<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Alumni Home</title>
    <link rel="icon" href="/images/logo_only.PNG">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Bootstrap core jquery and js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Custom style -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/css_login.css">
    <link rel="stylesheet" href="/css/navfixed.css">


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
            <div class="input-group">
                <input id="search" type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-12 col-lg-3">
            <a href="/addAlumni">
                <button type="button" class="btn btn-info ">+ New Alumnu</button>
            </a>
            {{--@if ($alumni->role == 'admin')
                <a href="/pendingAlumnus">
                    <button type="button" class="btn btn-info ">Review</button>

                </a>
            @endif--}}
        </div>

        <div class="col-sm-12 col-lg-3">
            <form>
                <select class="form-control" id="changeMajor" name="changeMajor">
                    <option value="All" readonly="true" selected>Major..</option>
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
                <select class="form-control" id="changeNationality" name="changeNationality">
                    <option value="All" readonly="true" selected>Nationality..</option>
                    <option value="Saudi">Saudi Arabia</option>
                    <option value="Syria">Syria</option>
                    <option value="Jordan">Jordan</option>
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
                    <tbody id="tableBody">


                    @foreach($alumnus as $alumni)

                        <tr id>
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
                <div id="temp"></div>
            </div>
        </div>


    </div>
</div>



</body>




<script>
    $(document).ready(function () {

        $("#changeNationality, #changeMajor").on('change', function () {
            var nationality = $('#changeNationality');
            var major = $('#changeMajor');
            console.log(nationality.val());
            console.log(major.val());
            var keywordNationality = nationality.val();
            var keywordMajor = major.val();

            $.ajax({
                url : '/changeNationalityFilter',
                type: 'GET',
                data: {'searchNationality':keywordNationality, 'searchMajor':keywordMajor},
                success: function (data) {
                    console.log('success');
                    $('#tableBody').html(data);
                }
            });

        });

        $("#Graduation_Year").on('change', function () {
            var value = $(this).val();
            $.ajax(
                {
                    url: 'yearGraduation.php',
                    type: 'POST',
                    data: 'Graduation_Year=' + value,
                    beforeSend: function () {
                        $("#table_alumni").html('Working on...');
                    },
                    success: function (data) {
                        $("#table_alumni").html(data);
                    }

                }
            )
        })

    });



</script>

<script type="text/javascript">

    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});

</script>


</html>