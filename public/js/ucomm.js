$(document).ready(function(){

    $("#submit-post-faculty").submit(function(){
        $("#submit-post-faculty .submit").addClass('disabled');
        event.preventDefault();
        var submit_post_faculty = $(this);
        var data = new FormData(this);
        $.post({
            processData: false,
            contentType: false,
            url: '/posts/create/',
            data:data,
            success: function (data) {
                $("#submit-post-faculty textarea").val([]);
                $("#submit-post-faculty .submit").removeClass('disabled');
                if(data){
                    $(data).hide().prependTo("#all-faculty-posts").fadeIn();
                }
            }
        });
    });

    $("#submit-post-university").submit(function(){
        $("#submit-post-university .submit").addClass('disabled');
        event.preventDefault();
        var submit_post_university = $(this);
        var data = new FormData(this);
        $.post({
            processData: false,
            contentType: false,
            url: '/posts/create/',
            data:data,
            success: function (data) {
                $("#submit-post-university textarea").val([]);
                $("#submit-post-university .submit").removeClass('disabled');
                if(data){
                    $(data).hide().prependTo("#all-university-posts").fadeIn();
                }
            }
        });
    });

    $(".like-post").submit(function (event) {
        post = $(this);
        event.preventDefault();
        var data = new FormData(this);
        var post_id = $(this).data('post-id');
        $.post({
            processData: false,
            contentType: false,
            data: data,
            url: '/posts/' + post_id + '/likes',
            success : function (data) {
                if(data.status===201){
                    console.log(data.data);
                    $(".likes-count[data-post-id="+post_id+"]").text(data.data);
                    $(".like-button[data-post-id="+post_id+"]").addClass('disabled');
                }
            }
        });
    });

});