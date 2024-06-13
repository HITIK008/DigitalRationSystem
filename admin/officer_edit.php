  <!-- Start Create New Post -->
  <div class="modal fade" role="dialog" tabindex="-1" id="officer_edit<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Post</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="officer_query.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <div class="form-group col-lg-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Here..." value="<?php echo $data['name']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Here..." value="<?php echo $data['email']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="mono">Mobile No.</label>
                        <input type="number" class="form-control" name="mono" placeholder="Enter Here..." value="<?php echo $data['mono']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $data['dob']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="pincode">PinCode</label>
                        <input type="number" class="form-control" name="pincode" placeholder="Enter Here..." value="<?php echo $data['pincode']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                          <label for="gender">Gender</label><br>
                            <select name="gender" class="form-control">
                                <option>Choose...</option>
                                <option value="Male" <?php if($data['gender']=="Male"){echo "selected";}?>>Male</option>
                                <option value="Female" <?php if($data['gender']=="Female"){echo "selected";}?>>Female</option>
                            </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="aano">Aadhar Card</label>
                        <input type="number" class="form-control" name="aano" placeholder="Enter Here..." value="<?php echo $data['aano']; ?>">
                    </div>                                
                    <center><button type="submit" class="btn btn-info" name="edit">Edit</button></center>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->

