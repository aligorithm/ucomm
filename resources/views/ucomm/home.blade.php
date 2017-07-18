<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}/css/ucomm.css">
    <title>Ucomm</title>
</head>
<body>
<header>
    <nav class="navbar" style="border-radius:0;height:60px;background: #33C5BA;">
        <div class="container">
            <div class="navbar-header">
                <button  type="button" class="navbar-toggle"
                         data-toggle="collapse" data-target="#myNavbar">
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand white" href="#" style="margin-bottom:14px; height:60px;">

                    UComm </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left"style="height:60px;padding:0;margin:0;">
                    <li>
                        <a href="/" style="height:60px;" class="white"><span class="fa fa-envelope-o"></span> News Feed</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{route('student.dashboard')}}" class="white">Uclass</a></li>
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

        <div class="col-lg-8" id="tab_section">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills responsive-tabs">
                        <li class="active"><a href="#faculty" data-toggle="tab">Faculty</a></li>
                        <li><a href="#university" data-toggle="tab">University</a></li>
                    </ul>
                    <div class="tab-content clearfix" id="tab-content">

                        <div class="tab-pane active" id="faculty">
                            <form action="" id="submit-post-faculty">
                                {{csrf_field()}}
                                <input type="hidden" name="scope_type" value="Faculty">
                                <input type="hidden" name="scope_id" value="{{$faculty->id}}">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <textarea name="body" class="form-control" cols="15" rows="6" placeholder="What is going on?" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="topic_id" class="form-control" required>
                                                <option value="1">Select Topic</option>
                                                @foreach($topics as $topic)
                                                    <option value="{{$topic->id}}">{{$topic->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="form-control btn btn-primary submit">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="all-faculty-posts">
                                @forelse($faculty->posts as $post)
                                    <div class="row post-content">
                                        <div class="col-lg-12">
                                            <h4><b>{{$post->user->name}}</b>
                                                <small>In {{$post->topic->name}}
                                                    <span class="fa fa-time">	{{$post->created_at->diffForHumans()}}</span>
                                                </small></h4>
                                        </div>
                                        <div class="col-lg-2">
                                            <p>
                                                <span class="fa fa-envelope-o" style="font-size:60px;"></span></p>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>
                                                {{$post->body}}
                                            </p>
                                            <div class="row">
                                            <form action="" class="like-post col-xs-2" data-post-id="{{$post->id}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="liked_type" value="Post">
                                                <input type="hidden" name="liked_id" value="{{$post->id}}">
                                                <button type="submit" class="btn like-button" data-post-id="{{$post->id}}"><span class="fa fa-thumbs-up"></span>
                                                    <span class="likes-count" data-post-id="{{$post->id}}">{{count($post->likes)}}</span></button>
                                            </form>
                                                <div class="col-xs-2">
                                                    <span class="fa fa-comments" data-post-id="{{$post->id}}"> {{count($post->comments)}}</span>
                                                </div>
                                                <form action="" class="comment-post col-xs-8" data-post-id="{{$post->id}}">
                                                    {{csrf_field()}}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="body" placeholder="Comment on this post.">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-primary submit-comment" type="submit" data-post-id="{{$post->id}}">Comment</button>
                                                        </span>
                                                    </div>
                                                </form>
                                        </div>
                                            </div>
                                        <div class="comment-section" data-post-id="{{$post->id}}">
                                            @forelse($post->comments as $comment)
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="thumbnail">
                                                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                                    </div><!-- /thumbnail -->
                                                </div><!-- /col-sm-1 -->

                                                <div class="col-xs-8">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <strong>{{$comment->user->name}}</strong> <span class="text-muted">commented {{$comment->created_at->diffForHumans()}}</span>
                                                        </div>
                                                        <div class="panel-body">
                                                            {{$comment->body}}
                                                        </div><!-- /panel-body -->
                                                    </div><!-- /panel panel-default -->
                                                </div><!-- /col-sm-5 -->
                                            </div>
                                                @empty
                                            <p class="alert alert-warning col-sm-10">No comments yet. Be the first to comment!</p>
                                                @endforelse
                                        </div>

                                    </div>
                                    @empty
                                <div class="alert alert-warning">No posts here yet.</div>
                                    @endforelse
                            </div>


                        </div>
                        <div class="tab-pane" id="university">
                            <form action="" id="submit-post-university">
                                {{csrf_field()}}
                                <input type="hidden" name="scope_type" value="University">
                                <input type="hidden" name="scope_id" value="{{$university->id}}">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <textarea name="body" class="form-control" cols="15" rows="6" placeholder="What is going on?" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <select name="topic_id" class="form-control" required>
                                                <option value="1">Select Topic</option>
                                                @foreach($topics as $topic)
                                                    <option value="{{$topic->id}}">{{$topic->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="form-control btn btn-primary submit">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="all-university-posts">
                                @forelse($university->posts as $post)
                                    <div class="row post-content">
                                        <div class="col-lg-12">
                                            <h4><b>{{$post->user->name}}</b>
                                                <small>In {{$post->topic->name}}
                                                    <span class="fa fa-time">	{{$post->created_at->diffForHumans()}}</span>
                                                </small></h4>
                                        </div>
                                        <div class="col-lg-2">
                                            <p>
                                                <span class="fa fa-user-o" style="font-size:60px;"></span></p>
                                        </div>
                                        <div class="col-lg-10">
                                            <p>
                                                {{$post->body}}
                                            </p>
                                            <div class="row">
                                                <form action="" class="like-post col-xs-2" data-post-id="{{$post->id}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="liked_type" value="Post">
                                                    <input type="hidden" name="liked_id" value="{{$post->id}}">
                                                    <button type="submit" class="btn like-button" data-post-id="{{$post->id}}"><span class="fa fa-thumbs-up"></span>
                                                        <span class="likes-count" data-post-id="{{$post->id}}">{{count($post->likes)}}</span></button>
                                                </form>
                                                <div class="col-xs-2">
                                                    <span class="fa fa-comments" data-post-id="{{$post->id}}"> {{count($post->comments)}}</span>
                                                </div>
                                                <form action="" class="comment-post col-xs-8" data-post-id="{{$post->id}}">
                                                    {{csrf_field()}}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="body" placeholder="Comment on this post.">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-primary submit-comment" type="submit" data-post-id="{{$post->id}}">Comment</button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="comment-section" data-post-id="{{$post->id}}">
                                            @forelse($post->comments as $comment)
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <div class="thumbnail">
                                                            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                                        </div><!-- /thumbnail -->
                                                    </div><!-- /col-sm-1 -->

                                                    <div class="col-xs-8">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <strong>{{$comment->user->name}}</strong> <span class="text-muted">commented {{$comment->created_at->diffForHumans()}}</span>
                                                            </div>
                                                            <div class="panel-body">
                                                                {{$comment->body}}
                                                            </div><!-- /panel-body -->
                                                        </div><!-- /panel panel-default -->
                                                    </div><!-- /col-sm-5 -->
                                                </div>
                                            @empty
                                                <p class="alert alert-warning col-sm-10">No comments yet. Be the first to comment!</p>
                                            @endforelse
                                        </div>

                                    </div>
                                @empty
                                    <div class="alert alert-warning">No posts here yet.</div>
                                @endforelse
                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4" id="tab_section">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills responsive-tabs">
                        <li ><br><span class="fa fa-envelope"></span></li>
                        <li class="active"><a href="#messages" data-toggle="tab">Messages</a></li>
                        <li><a href="#contacts" data-toggle="tab">Contacts</a></li>
                    </ul>
                    <div class="tab-content clearfix tab-container">
                        <div class="tab-pane active" id="message">
                            <div class="row">

                                <div class="col-lg-10 msg_content">
                                    <p><b>Uzo:</b><br>
                                        Hi!, I saw your work on MVC architecture.</p>
                                </div>
                                <div class="col-lg-10 col-lg-offset-2 mine msg_content">
                                    <p><b>ME:</b><br>
                                        Hi!, I saw your work on MVC architecture.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="12" rows="4"></textarea>
                                        <button  class="btn btn-primary shift-right" style="margin-top:2px;">Send</button>
                                    </div>

                                </div>

                            </div>



                        </div>
                        <div class="tab-pane" id="contacts">
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
                    <li><a href=""><b>Term of Use</b></a><b style="color:white;">  |</b></li>
                    <li><a href=""><b>Privacy</b></a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <p><b>Copyright &copy; Umbrella, 2017</b></p>
            </div>
        </div>
    </div>
    <script src="{{env('APP_URL')}}/js/jquery.min.js"></script>
    <script src="{{env('APP_URL')}}/js/bootstrap.min.js"></script>
    <script src="{{env('APP_URL')}}/js/ucomm.js"></script>

</footer>
</body>
</html>