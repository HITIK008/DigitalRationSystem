  <!-- Start Create New Post -->
  <div class="modal fade" role="dialog" tabindex="-1" id="officer_report_date<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Select Date</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="officer_report_between_date.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <div class="form-group col-lg-12">
                        <label for="from">From</label>
                        <input type="date" class="form-control" name="from">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="to">To</label>
                        <input type="date" class="form-control" name="to">
                    </div>                               
                    <center><button type="submit" class="btn btn-info" name="submit">submit</button></center>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->

