$(document).ready(function () {
    $("#add_course_form").submit(function (event) {
        event.preventDefault();
        add_course_form = $(this);
        data = new FormData(this);
        $.post({
            processData: false,
            contentType: false,
            url: '/uclass/courses/create/',
            data:data,
            success: function (data) {
                if (data) {
                    $("#add_course_form input[type='text']").val([]);
                    $("#add_course_form textarea").val([]);
                    $(data).hide().appendTo($(".courses")).fadeIn();
                    course_id = $(this).attr('data-course-id');

                    $.get({
                        processData: false,
                        contentType: false,
                        url: '/uclass/courses/'+course_id,
                        success: function (data) {
                            $(data).hide().appendTo($(".main-section")).fadeIn();
                        }
                    });
                }
            }
        });
    });
});