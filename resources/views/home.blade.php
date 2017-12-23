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
            <div class="input-group">
                <input id="search" value="" type="text" class="form-control" placeholder="Search">
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
            @if(Auth::user()->role == 'admin')
                <a href="/pendingAlumnus">
                    <button type="button" class="btn btn-info">Review Alumni</button>
                </a>
            @endif
        </div>

        <div class="col-sm-12 col-lg-3">
            <form>
                <select class="form-control" id="changeMajor" name="changeMajor">
                    <option value="" selected>Major..</option>
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
                    <option value="" selected>Nationality..</option>
                    <option value="Saudi">Saudi Arabia</option>
                    <option value="Syria">Syria</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Lebanese">Lebanese</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Palestinian">Palestinian</option>
                    <option value="Egyptian">Egyptian</option>
                    <option value="Emirati">Emirati</option>
                    <option value="Kuwaiti">Kuwaiti</option>
                    <option value="Omani">Omani</option>
                </select>

            </form>
            <br>
        </div>


        <div class="col-sm-12 col-lg-3">
            <form>
                <select class="form-control" id="Graduation_Year" name="Graduation_Year">
                    <option value="" selected>Graduation Year..</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
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




<script>
    $(document).ready(function () {

        $("#search, #changeNationality, #changeMajor, #Graduation_Year").bind('change keyup', function () {
            var searchAlumni = $('#search');
            var nationality = $('#changeNationality');
            var major = $('#changeMajor');
            var year = $('#Graduation_Year');
            console.log(searchAlumni.val());
            console.log(nationality.val());
            console.log(major.val());
            console.log(year.val());
            var keywordSearch = searchAlumni.val();
            var keywordNationality = nationality.val();
            var keywordMajor = major.val();
            var keywordYear = year.val();

            $.ajax({
                url: '/changeFilter',
                type: 'GET',
                data: {
                    'searchAlumni': keywordSearch,
                    'searchNationality': keywordNationality,
                    'searchMajor': keywordMajor,
                    'searchYear': keywordYear
                },
                success: function (data) {
                    var tableBody = $('#tableBody');
                    var tableWrapper = $('#table_alumni');
                    tableWrapper.hide();
                    tableBody.html(data);
                    tableWrapper.slideDown(200);
                }
            });

        });


    });



</script>

<script type="text/javascript">

    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});

</script>


</html>