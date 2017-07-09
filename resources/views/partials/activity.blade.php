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