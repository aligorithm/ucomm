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
                    $(data).hide().appendTo($(".courses_list")).fadeIn(function () {
                        course_id = $(this).attr('data-course-id');
                        $.get({
                            processData: false,
                            contentType: false,
                            url: '/uclass/courses/'+course_id,
                            success: function (data) {
                                if(data) {
                                    $('.tab-pane.active').removeClass('active');
                                    $('.tab-pane.active').hide();
                                    $(data).hide().appendTo($(".main_section")).fadeIn();
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

    function hideModal(){
        $(".modal").removeClass("in");
        $(".modal-backdrop").remove();
        $('body').removeClass('modal-open');
        $('body').css('padding-right', '');
        $(".modal").hide();
    }

});