<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/main.css">
    <style type="text/css">
        .activities_container{
            border: 2px solid #999;
            border-radius: 6px;
            height: 315px;
            overflow-y:scroll;
            padding: 0px 15px !important;
        }
    </style>
    <title>Uclass | Lecturer</title>
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
                            <span class="fa fa-caret-down"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">

        <div class="col-lg-7 tab-content">
            @foreach($courses as $course)
            <div class="main_section tab-pane fade in row @if($course == $courses->first()) active @endif" id="{{$course->id}}_tab">
                <div class="well">
                    <div class="col-lg-10">
                        <h4><b>{{$course->code}} | Department of {{$course->department}} | 3 Units <br>
                                Title: {{$course->title}} <br>
                                Next Lecture:</b> Next Thursday at 9:00am <br>
                            <b>Number of Students:57</b></h4>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-md btn-primary">Exit</button>
                    </div>
                    <br>
                    <a class="btn btn-primary btn-lg right" data-toggle="modal" href="#add_activity_modal" id="add_activity_link">Add Activity</a>

                </div>
                <div class="activities_container col-lg-12">
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
@endforeach
        </div>
        
        <!-- Modal -->
        <div id="add_course_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add Course</h4>
                    </div>
                    <div class="modal-body">
                        <div class="containter">
                            <div class="row">
                                <form class="form-horizontal" name="add_course_form" id="add_course_form" method="post" action="">
                                    {{csrf_field()}}
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <label for="InputName" class="col-lg-4 control-label">Course Title</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="title" id="title"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputName" class="col-lg-4 control-label">Course Code</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="code" id="code"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputMessage" class="col-lg-4 control-label">Course Description</label>
                                            <div class="col-lg-8">
                                                <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>

                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div><!-- End of Modal body -->
                </div><!-- End of Modal content -->
            </div><!-- End of Modal dialog -->
        </div><!-- End of Modal -->


        <div class="col-lg-5">
            <div id="courses_offered">
                <div class="row">
                    <div class="side_header">
                        <div class="col-lg-3">
                            <br>
                            <a class="btn btn-sm btn-primary add_course"  data-toggle="modal" href="#add_course_modal">Add Course</a>
                        </div>
                        <div class="col-lg-9">
                                <h3 style="text-align:center"><b>Courses</b></h3>
                        </div>

                    </div>
                </div>

                    <div class="courses">
                        <ul style="list-style:none">
                        @foreach($courses as $course)
                            <li @if($course == $courses->first()) class="active" @endif><a data-toggle="tab" href="#{{$course->id}}_tab">
                            <div class="row well">
                        <div class="course">
                            <div class="col-lg-9">
                                <h4><strong>{{$course->code}}</strong> <br>
                                    <small>{{$course->title}}</small>
                                </h4>
                            </div>
                        </div>
                            </div>
                            </a></li>
                        @endforeach
                        </ul>

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
                    <li><a href=""><b>Privacy</b></a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <p><b>Copyright &copy; Ucomm 2017</b></p>
            </div>
        </div>
    </div>
    <script src="{{env('APP_URL')}}/js/jquery.min.js"></script>
    <script src="{{env('APP_URL')}}/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/js/main.js"></script>
</footer>
</body>
</html>