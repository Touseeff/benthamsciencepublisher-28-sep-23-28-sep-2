<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SESSION['admin']){
 ?>
<!-- content area ----------------------------------------->
<!-- <div class="col-sm-10  ">
  <div class="container" >
    <div class="container-fluid">
      <div class="row"> -->
        <div class="col-12 d-flex justify-content-center" style="padding-left:238px">
          <form action="add_web_header_process.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" novalidate
            enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase  ">Add Web Header</h2>
            <div class="col-12 text-center pb-4">
            </div>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Title</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Exp:RICE-UNIVERSITY" value="" name="title" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
             <div class="col-md-12 pt-4">
                      <label for="validationCustomUsername" class="form-label">Add Image</label>
                      <div class="input-group has-validation">
                        <input type="file" class="form-control" id="validationCustomUsername" name="header_image" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
              </div>
            <div class="col-md-12 pt-4">
              <label for="validationCustom01" class="form-label"> Description</label>
              <textarea class="form-control" id="" rows="6" placeholder="Exp: At Bentham Science, we are committed to advancing the world of scientific research, and we're excited to share our extensive collection of scholarly content with the esteemed researchers." name="header_description"></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom04" class="form-label"> Status</label>
              <select class="form-select" id="validationCustom04" name="header_status" required>
                <option selected value="inactive">Inactive</option>
                <option selected value="active">Active</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-12 mt-3 mb-3">
              <button class="btn btn-primary float-end" type="submit" name="submit">Submit</button>
              <a class="btn btn-secondary float-end mx-2" href="index.php">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!-- </div>
</div>
</div>
</div> -->
<?php
}
else{
 header('Location:login.php');
}
?>