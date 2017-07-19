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