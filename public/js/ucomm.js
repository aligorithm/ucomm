$(document).ready(function(){
    $(".submit-post").submit(function(){
        $(".submit-post .submit").addClass('disabled');
        event.preventDefault();
        var data = new FormData(this);
        $.post({
            processData: false,
            contentType: false,
            url: '/posts/create/',
            data:data,
            success: function (data) {
                $(".submit-post textarea").val([]);
                $(".submit-post .submit").removeClass('disabled');
                if(data){
                    $(data).hide().prependTo("#all-posts").fadeIn();
                }
            }
        });
    });
});