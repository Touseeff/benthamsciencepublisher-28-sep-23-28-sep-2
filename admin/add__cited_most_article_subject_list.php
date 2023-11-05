
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SESSION['admin']){
 ?>

<!-- content area ----------------------------------------->
<div class="col-sm-10  ">
  <div class="container overflow-auto pb-5  " style="max-height: 750px;">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <form action="add__cited_most_article_subject_list_prcoess.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase" >Add subject list MOST CITED ARTICLES</h2>
            <div class="col-12 text-center pb-4">
            </div>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Article Title</label>
              <input type="text" class="form-control" id="validationCustom01" value="" name="subject_Article" placeholder="Exp: Bioinformatics" required>
              <div class="valid-feedback">
                Looks good!
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
  </div>
</div>
<!-- content area ----------------------------------------->
</div>
</div>
<?php
}
else{
 header('Location:login.php');
}

?>