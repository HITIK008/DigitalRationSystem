  <!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="chatbot_edit<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="chatbot_query.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <div class="form-group col-lg-12">
                        <label for="queries">Queries</label>
                        <input type="text" class="form-control" name="queries" placeholder="Enter Here..." value="<?php echo $data['queries']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="replies">Replies</label>
                        <input type="text" class="form-control" name="replies" placeholder="Enter Here..." value="<?php echo $data['replies']; ?>">
                    </div>                                 
                    <center><button type="submit" class="btn btn-info" name="edit">Edit</button></center>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->