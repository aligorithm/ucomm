<div class="tab-pane fade in" id="{{$course->id}}_tab" data-course-id="{{$course->id}}">
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
        <h3 align="center"><b>Activities</b></h3>
        <div class="activities_list" data-course-id="{{$course->id}}">
            @forelse($course->activities as $activity)
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
                <div class="alert alert-warning">No activity on this course yet. Create one and get started.</div>
            @endforelse
        </div>
    </div>
</div>