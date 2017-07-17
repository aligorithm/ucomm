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

});