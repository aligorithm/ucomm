$(document).ready(function () {
    $("#add_course_form").submit(function (event) {
        $("#add_course_form .submit").button('loading');
        event.preventDefault();
        add_course_form = $(this);
        data = new FormData(this);
        $.post({
            processData: false,
            contentType: false,
            url: '/uclass/courses/create/',
            data:data,
            success: function (data) {
                $("#add_course_form .submit").button('reset');
                if (data) {
                    $("#add_course_form input[type!='hidden']").val([]);
                    $("#add_course_form textarea").val([]);
                    $(".tab-pane.active").removeClass('active');
                    $("li.active").removeClass('active');
                    $(data).hide().appendTo($(".courses_list")).addClass('active').fadeIn(function () {
                        course_id = $(this).attr('data-course-id');
                        $.get({
                            processData: false,
                            contentType: false,
                            url: '/uclass/courses/'+course_id,
                            success: function (data) {
                                if(data) {
                                    $(data).appendTo($(".main_section")).addClass('active');
                                    $(".course-empty").remove();
                                    alert("Course Added!");
                                    hideModal();
                                }
                            }
                        });
                    });
                }
            }
        });
    });
        $("#add_activity_form").submit(function (event) {
            $("#add_activity_form .submit").button('loading');
            course_id = $(".tab-pane.active").data('course-id');
            event.preventDefault();
            add_activity_form = $(this);
            data = new FormData(this);
            $.post({
                processData: false,
                contentType: false,
                url: '/uclass/courses/'+course_id + '/activities/',
                data:data,
                success: function (data) {
                    $("#add_activity_form .submit").button('reset');
                    if (data) {
                        $("#add_activity_form input[type='text']").val([]);
                        $("#add_activity_form textarea").val([]);
                        $(".activity-empty").remove();
                        $(data).hide().prependTo($(".activities_list[data-course-id='"+course_id+"']")).fadeIn(function () {
                            alert("Activity Added!");
                            hideModal();
                        });
                    }
                }
            });
        });

        $("#search_course_form").on('submit',function(event){
            event.preventDefault();
            $("#search_course_form .submit").button('loading');
            $.get({
                processData : false,
                contentType: false,
                url: '/uclass/courses/search/'+ $("#search_course_form input[type='text']").val(),
                success : function (data) {
                    if(data){
                        $(data).hide();
                        $("#search-results").html(data).fadeIn();
                        $("#search_course_form .submit").button('reset');
                    }
                }
            })
    });

    $(document).on('click','.join-course-button',function () {
        var button = $(this).button('loading');
        var course_id = $(this).data('course-id');
        $.get({
            processData : false,
            contentType: false,
            url: '/uclass/courses/'+course_id+'/join',
            success: function (data) {
                if(data) {
                    button.html("Joined.").addClass('btn-disabled');
                    $(".tab-pane.active").removeClass('active');
                    $("li.active").removeClass('active');
                    $(data).hide().appendTo($(".courses_list")).addClass('active').fadeIn(function () {
                        course_id = $(this).attr('data-course-id');
                        $.get({
                            processData: false,
                            contentType: false,
                            url: '/uclass/courses/'+course_id,
                            success: function (data) {
                                if(data) {
                                    $(data).appendTo($(".main_section")).addClass('active');
                                    $(".course-empty").remove();
                                    alert("Course Added!");
                                    hideModal();
                                }
                            }
                        });
                    });
                }
            }
        });
    });

    function hideModal(){
        $(".modal").removeClass("in");
        $(".modal-backdrop").remove();
        $('body').removeClass('modal-open');
        $('body').css('padding-right', '');
        $(".modal").hide();
    }

});