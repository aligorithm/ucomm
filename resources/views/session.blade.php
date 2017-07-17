<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{env('APP_URL')}}/favicon.ico">
    <title>SignUp/Login</title>
</head>
<link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap.css" />
<link rel="stylesheet" href="{{env('APP_URL')}}/css/style.css" />
<style>
    body{color:#ffffff;}
    a{color: #ffffff;}
    a:hover{color:#ffffff;}
</style>
<body>
<div class="container-fluid">
    <div class="collapse navbar-collapse" id="app-navbar-collapse" style="background:#33C5BA;">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('student.dashboard')}}" class="white">Uclass</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-lg-offset-2 col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-12">

                        <img src="{{env('APP_URL')}}/img/logo.jpg" width="250" height="194" alt="logo" />
                        <p><i>Connecting students across the university</i></p>
                    </div>
                </div>

                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12">
                            <h3> Login</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control" placeholder="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password"  class="form-control" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-5 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-1 col-lg-offset-1">
                            <input type="submit" class="btn btn-md btn-success" value="Sign In" />
                        </div>

                        <div class="form-group col-lg-2 hidden-lg">
                            <p>New here? <a href="#signup">Sign Up</a></p>
                        </div>

                        <div class="form-group col-lg-2">
                            <a href="{{ route('password.request') }}" target="_blank">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="signup">
            <form role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-lg-12">
                        <h2>Sign Up Now</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row" id="matric_number">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12{{ $errors->has('matric_number') ? ' has-error' : '' }}">
                        <label>Matric Number</label>
                        <input type="text" name="matric_number" class="form-control" placeholder="Matric Number" required>
                        @if ($errors->has('matric_number'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('matric_number') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Faculty</label>
                        <select name="faculty_id" class="form-control">
                            <option> -Select Faculty- </option>
                            @foreach($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password" maxlength="16">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" maxlength="16">
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-lg-12">
                        <input type="checkbox" name="agree" value="Agree" require><label> I Agree to the Terms & Condition | Privacy Policy.</label>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-12 align-content-center">
                            <input type="submit" class="btn btn-md btn-success" value="Sign Up">
                    </div>
                </div>
                <div class="form-group col-lg-2 hidden-lg">
                    <p>Have an account already? <a href="#login">Login</a></p>
                </div>


            </form>
        </div>


    </div>
</div>
</body>
<script src="{{env('APP_URL')}}/js/jquery.min.js"></script>
<script src="{{env('APP_URL')}}/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
    $("#lecturer").on('click',lecturer());
    $("#student").on('click',student());

    function student() {
        $('#matric_number').show();
    }
    function lecturer() {
        $('#matric_number').hide();
    }
    })
</script>
</html>
