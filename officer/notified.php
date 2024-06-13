        <!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="notified<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Post</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="notification.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        
                    <div class="form-group col-lg-12">
                        <label for="name">Name</label><br>
                        <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>"><br>
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Mobile No.</label>
                          <input class="form-control" type="number" name="mono" value="<?php echo $data['mono']; ?>">
                    </div> 
                    <div class="form-group col-lg-12">
                          <label>Message</label>
                          <input class="form-control" type="text" name="msg">
                        </div>
                  </div>
                    <center><button type="submit" class="btn btn-info" name="submit">Submit</button></center>
                </form><br>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->