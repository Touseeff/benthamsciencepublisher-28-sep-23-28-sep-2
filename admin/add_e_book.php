<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SESSION['admin']){
 ?>

<!-- content area ----------------------------------------->
<div class="col-sm-10  ">
  <div class="container overflow-auto pb-3" style="max-height: 700px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <form action="add_e_book_process.php" data-toggle="validator" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase ">Add Book</h2>
            <div class="col-12 text-center pb-4">
            </div>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label"> Book Title</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Simplifying Complexity: Life is Uncertain, Unfair and Unequal" value="" name="book_title" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-4">
              <label for="validationCustom01" class="form-label">Book Cover URL</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Exp: https://benthambooks.com/ebook-images/sample-files-images/9781681087665/9781681087665-1.jpg" value="" name="book_cover_url" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-4">
              <label for="validationCustom01" class="form-label">View More Pdf URL</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Exp: https://benthambooks.com/ebook-files/catalog/bentham-books-best-sellers.pdf" value="" name="view_more_pdf_url"
                required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12 pt-4">
              <label for="validationCustom01" class="form-label">Book Description</label>
              <textarea class="form-control" id="validationCustom01" placeholder="Exp: Simplifying Complexity explains the scientific study of complex cognitive networks, as well as the methods scientists use to parse difficult problems into manageable pieces." rows="6" name="book_description"
                required></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom04" class="form-label">Book Status</label>
              <select class="form-select" id="validationCustom04" name="book_status" required>
                <option selected value="inactive">Inactive</option>
                <option selected value="active">Active</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom01" class="form-label">Price</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Exp: 85" value="" name="price" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom01" class="form-label">Book Code</label>
              <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Exp: 9781681082172" name="book_code" required>
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