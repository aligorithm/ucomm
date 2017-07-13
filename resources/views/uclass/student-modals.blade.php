
<!-- Modal -->
<div id="add_course_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Search Courses</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <form class="form-horizontal" name="search_course_form" id="add_course_form" method="get" action="">
                            {{csrf_field()}}
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label for="title" class="col-lg-4 control-label">Course Title</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="title" id="title"  required>
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-info pull-right submit" data-loading-text="<img src='{{env('APP_URL')}}/img/loader.svg'>">Search</button>

                            </div>
                        </form>
                        <div class="container" id="search-results">

                        </div>

                    </div>

                </div>
            </div><!-- End of Modal body -->
        </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
</div><!-- End of Modal -->