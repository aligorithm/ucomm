
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
                        <form class="" id="search_course_form" method="get" action="">
                            {{csrf_field()}}
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <input type="text" class="form-control .query" name="title" id="title" placeholder="Title"  required>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <button type="submit" name="submit" class="btn btn-info form-control submit" data-loading-text="<img src='{{env('APP_URL')}}/img/loader.svg'>"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="row" id="search-results">
                    </div>
                </div>
            </div><!-- End of Modal body -->

        </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
</div><!-- End of Modal -->