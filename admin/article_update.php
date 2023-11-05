<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SESSION['admin']){
 ?>
<!-- content area ----------------------------------------->
<!-- <div class="col-sm-12  "> -->
  <div class="container overflow-auto pb-5"style="padding-left:238px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <form action="article_update_process.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" novalidate
            enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase ">All Journal Impacting Science Status Update</h2>
            <div class="col-md-6 pl-3">
              <label for="validationCustom01" class="form-label">Journal Status </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" value="active">
                <label class="form-check-label" for="inlineRadio1">Active</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" value="inactive">
                <label class="form-check-label" for="inlineRadio2">Inactive</label>
              </div>
            </div>
            <div class="col-12 mt-3 mb-3">
              <button class="btn btn-primary float-end" type="submit" name="journal_status_submit">Submit</button>
              <a class="btn btn-secondary float-end mx-2" href="index.php">Cancel</a>
            </div>
          </form>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <form action="article_update_process.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" novalidate
            enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase">ALL ADD MOST CITED ARTICLES STATUS UPDATE</h2>
            <div class="col-md-6 pl-3">
              <label for="validationCustom01" class="form-label">Journal Status </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="article_status" value="active">
                <label class="form-check-label" for="inlineRadio1">Active</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="article_status" value="inactive">
                <label class="form-check-label" for="inlineRadio2">Inactive</label>
              </div>
            </div>
            <div class="col-12 mt-3 mb-3">
              <button class="btn btn-primary float-end" type="submit" name="most_article_status_submit">Submit</button>
              <a class="btn btn-secondary float-end mx-2" href="index.php">Cancel</a>
            </div>
          </form>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <form action="article_update_process.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" novalidate
            enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase">ALL BOOKS STATUS UPDATE</h2>
            <div class="col-md-6 pl-3">
              <label for="validationCustom01" class="form-label">Journal Status </label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="book_status" value="active">
                <label class="form-check-label" for="inlineRadio1">Active</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="book_status" value="inactive">
                <label class="form-check-label" for="inlineRadio2">Inactive</label>
              </div>
            </div>
            <div class="col-12 mt-3 mb-3">
              <button class="btn btn-primary float-end" type="submit" name="book_status_submit">Submit</button>
              <a class="btn btn-secondary float-end mx-2" href="index.php">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content area ----------------------------------------->
</div>
<!-- </div> -->
<?php     
}
else{
 header('Location:login.php');
}
?>