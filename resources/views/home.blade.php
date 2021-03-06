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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom style -->
    <link rel="stylesheet" href="/css/css_login.css">
    <link rel="stylesheet" href="/css/navfixed.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/boxInfo.css">


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
                        <a href="/" style="display: block;">

                            <i class="fa fa-home fa-lg"></i> Home
                        </a>
                    </li>




                    <li class="collapsed">
                        <a href="/logout" style="display: block;">
                            <p>
                                <i class="fa fa-user fa-lg"></i> Log Out
                            </p>
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

        <div class="row" style="margin: 5px">
            @if(Auth::user()->role == 'admin')
                <div class="col-sm-12 col-lg-6">
                    <a href="/addAlumni" style="margin-bottom: 5px">
                        <button type="button" class="btn btn-info btn-block">+ New Alumnu</button>
                    </a></div>
                <div class="col-sm-12 col-lg-6">
                    <a href="/pendingAlumnus">
                        <button type="button" class="btn btn-info btn-block">Review Alumni</button>
                    </a></div>
            @else
                <div class="col-sm-12 col-lg-12">
                    <a href="/addAlumni">
                        <button type="button" class="btn btn-info btn-block">+ New Alumnu</button>
                    </a></div>
            @endif

        </div>
        <br>



        <div class="row" style="margin: 5px">
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
        </div>

        <div class="row" style="margin: 5px">
            <div class="col-sm-12 col-lg-12">
                <div id="table_alumni" class="table-responsive" style=" height: 60vh">
                    <table class="table table-striped table-hover" style="overflow-y: auto; background-color:white">
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
                                <td class="studentID">{{ $alumni->id }}</td>
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
                <div class="box_info col-lg-12 col-sm-4" style="display: none; width: 80%; position: fixed;  z-index: 10;" >

                </div>
            </div>

        </div>

        <div class="col-sm-10 col-lg-12 text-center">
            <ul class="pagination pagination-lg pager" id="Pager"></ul>
        </div>
    </div>
</div>



</body>


<script>
    $.fn.pageMe = function (opts) {
        var $this = this,
            defaults = {
                perPage: 7,
                showPrevNext: false,
                hidePageNumbers: false
            },
            settings = $.extend(defaults, opts);

        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pager');

        if (typeof settings.childSelector != "undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector != "undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.size();
        var numPages = Math.ceil(numItems / perPage);

        pager.data("curr", 0);

        if (settings.showPrevNext) {
            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
        }

        var curr = 0;
        while (numPages > curr && (settings.hidePageNumbers == false)) {
            $('<li><a href="#" class="page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.showPrevNext) {
            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
        }

        pager.find('.page_link:first').addClass('active');
        pager.find('.prev_link').hide();
        if (numPages <= 1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function () {
            var clickedPage = $(this).html().valueOf() - 1;
            goTo(clickedPage, perPage);
            return false;
        });
        pager.find('li .prev_link').click(function () {
            previous();
            return false;
        });
        pager.find('li .next_link').click(function () {
            next();
            return false;
        });

        function previous() {
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next() {
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page) {
            var startAt = page * perPage,
                endOn = startAt + perPage;

            children.css('display', 'none').slice(startAt, endOn).show();

            if (page >= 1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }

            if (page < (numPages - 1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }

            pager.data("curr", page);
            pager.children().removeClass("active");
            pager.children().eq(page + 1).addClass("active");

        }
    };

    $(document).ready(function () {

        $('#tableBody').pageMe({pagerSelector: '#Pager', showPrevNext: true, hidePageNumbers: false, perPage: 15});

    });
</script>


<script src="/js/filters.js"></script>
<script src="/js/alumniInfoBox.js"></script>

<script type="text/javascript">
    $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
</script>


</html>
