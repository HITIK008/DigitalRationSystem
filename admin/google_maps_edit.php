  <!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="google_maps_edit<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Marker</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="google_maps_query.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <div class="form-group col-lg-12">
                        <label for="content">Latitude</label>
                        <input type="number" class="form-control" name="lat" placeholder="Enter Here..." value="<?php echo $data['lat']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="content">Longitude</label>
                        <input type="number" class="form-control" name="lng" placeholder="Enter Here..." value="<?php echo $data['lng']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="content">title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Here..." value="<?php echo $data['title']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="content">Pin Code</label>
                        <input type="number" class="form-control" name="pincode" placeholder="Enter Here..." value="<?php echo $data['pincode']; ?>">
                    </div>
                                                    
                    <center><button type="submit" class="btn btn-info" name="edit">Edit</button></center>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->