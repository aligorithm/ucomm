<div class="row">
    <div class="col-sm-2">
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