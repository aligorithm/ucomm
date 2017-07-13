<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/main.css">
</head>
<body>
<header>
    <nav class="navbar" style="background-color:#33C5BA; border-radius:0;height:60px;">
        <div class="container">
            <div class="navbar-header">
                <button  type="button" class="navbar-toggle"
                         data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand white" href="#" style="margin-bottom:14px; height:60px;">U-Class </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left" style="height:60px;padding:0;margin:0;">
                    <li>
                        <a href="/home" style="height:60px;" class="white"><span class="fa fa-caret-left"></span> News Feed</a>
                    </li>
                    <li>
                        <a class="btn btn-sm btn-primary add_course"  data-toggle="modal" href="#add_course_modal">Add Course</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="" class="user-image" alt="User Image">
                            <span class="hidden-xs white">{{auth()->user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="" class="img-circle" alt="User Image">

                                <p style="color:black;">
                                     {{auth()->user()->name}}
                                    <small>Student</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/profile" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        <i class="fa fa-fw fa-power-off"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
            <div class="col-lg-7 tab-content main_section">
                @forelse($courses as $course)
                    <div class="tab-pane fade in @if($course == $courses->first()) active @endif" id="{{$course->id}}_tab" data-course-id="{{$course->id}}">
                        <div class="well">
                            <div class="row">
                            <div class="col-lg-10">
                                <h4><b>{{$course->code}} | Department of {{$course->department}} | 3 Units <br>
                                        Title: {{$course->title}} <br>
                                        Next Lecture:</b> Next Thursday at 9:00am <br>
                                    </h4>
                            </div>

                            <br>
                            </div>
                        </div>
                        <div class="activities_container col-lg-12">
                            <h3 align="center"><b>Activities</b></h3>
                            <div class="activities_list" data-course-id="{{$course->id}}">
                                @forelse($course->activities->take(15) as $activity)
                                    <div class="row well">
                                        <div class="col-lg-9">
                                            <h4><b>{{$activity->type}}</b> |
                                                <b>{{$activity->name}}</b><br>
                                                <small>{{str_limit($activity->description,200)}}</small>
                                            </h4>
                                        </div>
                                        <div class="col-lg-3 pull-right">
                                            <span>{{$activity->created_at->diffForHumans()}}</span>
                                            <button class="btn btn-md btn-primary">More Info</button>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-warning">No activity on this course yet.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning">No courses yet.</div>
                @endforelse
            </div>




            <div class="col-lg-5">
        <div id="courses_offered">
            <div class="row">
                <div class="side_header">
                    <div class="col-lg-9">
                        <h3 style="text-align:center"><b>Courses</b></h3>
                    </div>

                </div>
            </div>

            <div class="courses">
                <ul class="courses_list">
                    @foreach($courses as $course)
                        <li style="list-style:none" @if($course == $courses->first()) class="active" @endif><a data-toggle="tab" href="#{{$course->id}}_tab">
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
@include('uclass.student-modals')
<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul>
                    <li><a href=""><b>Terms of Use</b></a> <b style="color:white;">|</b></li>
                    <li><a href=""><b>Privacy</b></a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <p><b>Copyright &copy; Ucomm, 2017</b></p>
            </div>
        </div>
    </div>
    <form action="" style="display: none;" id="csrf">
        {{csrf_field()}}
    </form>
    <script src="{{env('APP_URL')}}/js/jquery.min.js"></script>
    <script src="{{env('APP_URL')}}/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/js/main.js"></script>
</footer>
</body>
</html>