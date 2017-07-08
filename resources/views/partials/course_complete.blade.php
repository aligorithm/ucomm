<div class="tab-pane fade in" id="{{$course->id}}_tab">
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