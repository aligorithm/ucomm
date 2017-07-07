<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/main.css">
    <style type="text/css">
        #activities_container{
            border: 2px solid #999;
            border-radius: 6px;
            height: 315px;
            overflow-y:scroll;
            padding: 0px 15px !important;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar" style="background-color:#599a68; border-radius:0;height:60px;">
        <div class="container">
            <div class="navbar-header">
                <button  type="button" class="navbar-toggle"
                         data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#" style="margin-bottom:14px; height:60px;">

                    U-Class </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left"style="height:60px;padding:0;margin:0;">
                    <li>
                        <a href="index.php" style="height:60px;">Lecturer</a>
                    </li>
                    <li class="">
                        <a  style="height:60px;" class="" data-toggle="" href="#"><span class="fa fa-envelope-o"></span> Naeem Balogun
                            <Ba class="fa fa-caret-down"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">

        <div class="col-lg-7">
            <div class="row" id="main_section">
                <div class="well">
                    <div class="col-lg-10">
                        <h4><b>ICS 355 | Department of ICS | 3 Units <br>
                                Title: Machine Learning Systems <br>
                                Next Lecture:</b> Next Thursday at 9:00am <br>
                            <b>Number of Students:57</b></h4>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-md btn-primary">Exit</button>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-lg right">Add Activity</button>

                </div>
                <div class="col-lg-12" id="activities_container">
                    <center><h3><b>Activities</b></h3></center>
                    <div class="row well">
                        <div class="col-lg-9">
                            <h4><b>Assignment</b> <br>
                                <small>Expand the example attached to include support
                                    ...</small>
                            </h4>
                        </div>
                        <div class="col-lg-3">
                            <span>on 1st July</span>
                            <button class="btn btn-md btn-primary">More Info</button>
                        </div>
                    </div>

                    <div class="row well">
                        <div class="col-lg-9">
                            <h4><b>Assignment</b> <br>
                                <small>Expand the example attached to include support
                                    ...</small>
                            </h4>
                        </div>
                        <div class="col-lg-3">
                            <span>on 1st July</span>
                            <button class="btn btn-md btn-primary">More Info</button>
                        </div>
                    </div>
                    <div class="row well">
                        <div class="col-lg-9">
                            <h4><b>Assignment</b> <br>
                                <small>Expand the example attached to include support
                                    ...</small>
                            </h4>
                        </div>
                        <div class="col-lg-3">
                            <span>on 1st July</span>
                            <button class="btn btn-md btn-primary">More Info</button>
                        </div>
                    </div>
                    <div class="row well">
                        <div class="col-lg-9">
                            <h4><b>Assignment</b> <br>
                                <small>Expand the example attached to include support
                                    ...</small>
                            </h4>
                        </div>
                        <div class="col-lg-3">
                            <span>on 1st July</span>
                            <button class="btn btn-md btn-primary">More Info</button>
                        </div>
                    </div>
                    <div class="row well">
                        <div class="col-lg-9">
                            <h4><b>Assignment</b> <br>
                                <small>Expand the example attached to include support
                                    ...</small>
                            </h4>
                        </div>
                        <div class="col-lg-3">
                            <span>on 1st July</span>
                            <button class="btn btn-md btn-primary">More Info</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div class="col-lg-5">
            <div id="courses_offered">
                <div class="row">
                    <div class="side_header">
                        <div class="col-lg-3">
                            <br>
                            <button class="btn btn-sm btn-primary">Add Course</button>
                        </div>
                        <div class="col-lg-9">
                            <center>
                                <h3><b>Courses</b></h3></center>
                        </div>

                    </div>
                </div>
                <div class="row well">
                    <div class="courses">
                        <div class="col-lg-9">
                            <h4><strong>Ics 306</strong> <br>
                                <small>Human Computer Interaction</small>
                            </h4>
                        </div>
                        <div class="col-lg-3">
                            <br>
                            <button class="btn btn-md btn-primary">Enter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul>
                    <li><a href=""><b>Term of Use</b></a></li><b style="color:white;">|</b>
                    <li><a href=""><b>Privacy</a></b></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <p><b>Copyright &copy Umbrella, 2017</b></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>