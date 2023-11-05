<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SESSION['admin']){
  ?>
<!-- content area ----------------------------------------->
<!-- <div class="col-sm-10  ">
  <div class="row pt-3">
    <div class="col-3"></div>
    <div class="col-6"> -->
    <!-- <?php
//  if (isset($_REQUEST['message'])) {
  ?>
    <div class="alert alert-<?php echo $_REQUEST['color'] ?> alert-dismissible fade show text-center" role="alert">
      <strong>Message : </strong> <?php echo $_REQUEST['message']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  //}
  ?> -->
    <!-- </div>
    <div class="col-3"></div>
  </div> -->
  <!-- <div class="container overflow-auto pb-3" style="max-height: 700px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-flex justify-content-center"> -->
          <form action="add_journal_impact_science_process.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation  pb-5" enctype="multipart/form-data">
            <!-- <h2 class="bg-primary text-light text-center mt-3 mb-3 text-uppercase ">Add Journal Impacting Science</h2> -->
            <div class="col-12 text-center pb-4">
            </div>
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Journal Name</label>
              <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Exp:Current Bioinformatics"  name="journal_name" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-4">
              <label for="validationCustom01" class="form-label">Journal Image URL</label>
              <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Exp:https://www.eurekaselect.com/images/bentham/CBIO_0.gif" name="journal_image_url"
                required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-4">
              <label for="validationCustom01" class="form-label">Journal PDF URL</label>
              <input type="text" class="form-control" id="validationCustom01" value=""  placeholder="Exp:https://www.eurekaselect.com/images/journal-flyer/cbio-flyer.pdf" name="journal_pdf_url" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-4">
              <label for="validationCustom01" class="form-label">Impact Factor</label>
              <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Exp: 5 - Year: 2.8" name="impact_factor" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-4">
              <label for="validationCustom01" class="form-label">Journal Number</label>
              <input type="text" class="form-control" id="validationCustom01" value=""  placeholder="Exp: 65" name="journal_code" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12 pt-4">
              <label for="validationCustom01" class="form-label">Journal Description</label>
              <textarea class="form-control" id="" rows="6" name="journal_description" placeholder="Exp: OpenAire, Journal Citation Reports/Science Edition, Cambridge Scientific Abstracts (CSA)/ProQuest, Science Citation Index Expanded™ (SciSearch®), Essential Science Indicators, BIOSIS Previews, Biological Abstracts, Ulrich's Periodicals Directory, Suweco CZ, Scopus, Scilit, QOAM, PubsHub, Norwegian Register, MediaFinder®-Standard Periodical Directory, JournalTOCs, J-Gate, Index Copernicus, Google Scholar, Genamics Journal Seek, EMBASE" required></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom04" class="form-label">Journal Status</label>
              <select class="form-select" id="validationCustom04"   name="journal_status" required>
                <option selected value="inactive">Inactive</option>
                <option selected value="active">Active</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom01" class="form-label">Current</label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Exp: 4" value="" name="current" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 pt-4">
              <label for="validationCustom01" class="form-label">Journal Code</label>
              <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Exp: CBIO" name="j_code" required>
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
      <!-- </div>
    </div>
  </div>
</div> -->
<!-- content area ----------------------------------------->
</div>
</div>
<?php
}
else{
 header('Location:login.php');
}
?>