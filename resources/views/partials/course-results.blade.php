@forelse($courses as $course)
            <div class="course-result col-xs-8">
                <h4><strong>{{$course->code}}</strong> <br>
                    <small>{{$course->title}}</small>
                </h4>
                <p>{{$course->description}}</p>
                <button class="btn btn-primary pull-right join-course-button" data-course-id="{{$course->id}}">Join</button>
            </div>
    @empty
    <div class="alert alert-warning col-xs-5">Sorry. No courses match your query.</div>
    @endforelse