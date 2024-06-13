  <!-- Start Create New Post -->
<div class="modal fade" role="dialog" tabindex="-1" id="latest_news_edit<?php echo $data['id']?>">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">Edit Post</h2>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true"><h1>×</h1></span>
            </button>
          </div>
          <div class="panel-body">
                <form role="form" action="latest_news_query.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <div class="form-group col-lg-12">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Enter Here..." value="<?php echo $data['content']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="url">url</label>
                        <input type="url" class="form-control" name="url" placeholder="http://www.example.com" value="<?php echo $data['url']; ?>">
                    </div>                                 
                    <center><button type="submit" class="btn btn-info" name="edit">Edit</button></center>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create New Post -->