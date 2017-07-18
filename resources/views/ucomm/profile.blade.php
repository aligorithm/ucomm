<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/ucomm.css">
</head>
<body>
<header>
    <nav class="navbar navbar-inverse" style="border-radius:0;height:60px;">
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
                        <a href="index.php" style="height:60px;"><span class="fa fa-envelope-o"></span> News Feed</a>
                    </li>
                    <li class="">
                        <a  style="height:60px;" class="" data-toggle="" href="#">Fola Oluwatobi
                            <span class="fa fa-caret-down"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8" id="tab_section">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills responsive-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li><a href="#posts" data-toggle="tab">Posts</a></li>
                    </ul>
                    <div class="tab-content clearfix" id="tab-content">
                        <div class="tab-pane active" id="profile">
                            <p>MVC enthusiast, almost-graduate and student unionist. let's talk about programming! <br>
                                <br>
                                <b>School:</b>University of Ilorin.<br>
                                <br>
                                <b>Faculty:</b>CIS <br>
                                <br>
                                <b>Level:</b> 400 <br>
                                <br>
                                <b>Website:</b><a href="www.codeboy.ng">www.codeboy.ng</a><br>
                                <br>
                                <b>Hobbies:</b>coding, gaming</p>
                        </div>
                        <div class="tab-pane" id="posts">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer fixed" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul>
                    <li><a href=""><b>Term of Use</b></a> <b style="color:white;">|</b></li>
                    <li><a href=""><b>Privacy</b></a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <p><b>Copyright &copy; Ucomm, 2017</b></p>
            </div>
        </div>
    </div>
    <script src="{{env('APP_URL')}}/js/jquery.min.js"></script>
    <script src="{{env('APP_URL')}}/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/js/ucomm.js"></script>
</footer>
</body>
</html>