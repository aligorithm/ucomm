<div class="col-lg-10 col-lg-offset-2 mine msg_content">
    <p>
        <h5><b>ME:</b><small>{{$message->created_at->diffForHumans()}}</small></h5>
        <br>
        {{$message->body}}.</p>
</div>