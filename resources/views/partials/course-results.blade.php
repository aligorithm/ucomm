@forelse($courses as $course)
        <div class="course">
            <div class="col-lg-9">
                <h4><strong>{{$course->code}}</strong> <br>
                    <small>{{$course->title}}</small>
                </h4>
                <p>{{$course->description}}</p>
            </div>
            <button class="btn btn-primary">Join</button>
        </div>
    @empty
    <div class="alert alert-warning">Sorry. No courses match your query.</div>
    @endforelse