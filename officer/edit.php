    <!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="user-edit<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Address</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <div class="form-group col-lg-12">
                          <label>Address</label>
                          <textarea name="address" cols="30" rows="7" class="form-control" placeholder="Enter Address Here..."><?php echo $data['address']; ?></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                          <label>City</label>
                          <input class="form-control" type="text" name="city" value="<?php echo $data['city']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label>Pincode</label>
                          <input class="form-control" type="number" name="pincode" value="<?php echo $data['pincode']; ?>">
                    </div>
                    
                  </div>
                    <center><button type="submit" class="btn btn-info" name="update">Save Change</button></center>
                </form><br>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->