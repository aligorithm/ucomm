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
                    $(data).hide().appendTo($(".courses_list")).fadeIn(function () {
                        course_id = $(this).attr('data-course-id');
                        course_code = $(this).attr('data-course-code');
                        $.get({
                            processData: false,
                            contentType: false,
                            url: '/uclass/courses/'+course_id,
                            success: function (data) {
                                if(data) {
                                    $('.tab-pane.active').hide();
                                    $('.courses_list .active').removeClass('active');
                                    $(data).hide().appendTo($(".main_section")).fadeIn();
                                    $('.nav-tabs a[href="#' + course_code + '_tab' +  '"]').tab('show');
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