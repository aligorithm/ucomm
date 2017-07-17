<div class="row post-content">
    <div class="col-lg-12">
        <b>{{$post->user->name}}</b> On {{$post->topic->name}}
    </div>
    <div class="col-lg-2">
        <p>
            <span class="fa fa-envelope-o" style="font-size:60px;"></span></p>
    </div>
    <div class="col-lg-10">
        <p>
            {{$post->body}}<br>
            <span class="fa fa-thumbs-up"> 10 Likes</span>
            <span class="fa fa-comments"> 10 comments</span> <span class="fa fa-time">	5 hours ago</span>
        </p>
    </div>
</div>