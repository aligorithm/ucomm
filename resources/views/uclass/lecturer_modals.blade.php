<!-- Modal -->
<div id="add_activity_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Activity</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form class="form-horizontal" id="add_activity_form" method="post" action="#">
                            {{csrf_field()}}
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label for="name" class="col-lg-4 control-label">Activity Title</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="name" id="name"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type" class="col-lg-4 control-label">Activity Type (E.g. assignment, material, notification)</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="type" id="type"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-lg-4 control-label">Activity Description</label>
                                    <div class="col-lg-8">
                                        <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-info pull-right submit" data-loading-text="<img src='{{env('APP_URL')}}/img/loader.svg'>">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div><!-- End of Modal body -->
        </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
</div><!-- End of Modal -->


<!-- Modal -->
<div id="add_course_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Course</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form class="form-horizontal" name="add_course_form" id="add_course_form" method="post" action="">
                            {{csrf_field()}}
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label for="InputName" class="col-lg-4 control-label">Course Title</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="title" id="title"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputName" class="col-lg-4 control-label">Course Code</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="code" id="code"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="department" class="col-lg-4 control-label">Department</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="department" id="code"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputMessage" class="col-lg-4 control-label">Course Description</label>
                                    <div class="col-lg-8">
                                        <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-info pull-right submit" data-loading-text="<img src='{{env('APP_URL')}}/img/loader.svg'>">Submit</button>

                            </div>
                        </form>

                    </div>

                </div>
            </div><!-- End of Modal body -->
        </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
</div><!-- End of Modal -->