<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if($_SESSION['admin']){
require_once('database.php');
?>
<div class="col-sm-10  ">
  <div class="container overflow-auto pb-5  " style="max-height: 750px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <form action="add_most_cited_article_process.php" method="POST" id="form  bgcolor"
            class="row col-md-10 needs-validation shadow-lg rounded-2 mt-5 pb-5" enctype="multipart/form-data">
            <h2 class="bg-primary text-light
                       text-center mt-3 mb-3 text-uppercase">Add MOST CITED ARTICLES</h2>
            <div class="col-12 text-center pb-4">
            </div>
            <?php
            $sql = $conn->prepare("SELECT * FROM add_subject_list");
            $sql->execute();
            ?>
            <div class="col-md-12 pt-3">
              <label for="validationCustom04" class="form-label">Add Subject Article</label>
              <select class="form-select" id="validationCustom04" name="subject_id" required>
                <?php
                while ($row = $sql->fetch(PDO::FETCH_BOTH)) {
                  ?>
                <option selected value="<?php echo $row['sId'] ?>">
                  <?php echo $row['sTitle'] ?>
                </option>
                <?php
                }
                ?>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-12 pt-3">
              <label for="validationCustom01" class="form-label">Article Title</label>
              <input type="text" class="form-control" class="form-select is-invalid" id="validationCustom01" placeholder="Exp: Cervical Cancer Metastasis and Recurrence Risk Prediction Based on Deep Convolutional Neural Network" value=""
                name="article_title" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <label for="validationCustom01" class="form-label">Journal Title</label>
              <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Exp: Current Bioinformatics"  name="journal_title" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <label for="validationCustom01" class="form-label">Year</label>
              <input type="number" class="form-control" id="validationCustom01" placeholder="Exp: 2022" value="" name="year" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <label for="validationCustom01" class="form-label">Volume</label>
              <input type="number" class="form-control" id="validationCustom01" value="" placeholder="Exp: 17" name="volume" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <label for="validationCustom01" class="form-label">Issue</label>
              <input type="number" class="form-control" id="validationCustom01" value="" placeholder="Exp: 1" name="issue" required>
              <div class="valid-feedback"> 
                Looks good!
              </div>
            </div>
            <div class="col-md-12 pt-3">
              <label for="validationCustom01" class="form-label">Author</label>
              <textarea class="form-control" placeholder="Exp: Ye, Zixuan; Zhang, Yunxiang; Liang, " id="" rows="3" name="author" required></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <label for="validationCustom04" class="form-label">Journal Status</label>
              <select class="form-select" id="validationCustom04" name="journal_status" required>
                <option selected value="inactive">Inactive</option>
                <option selected value="active">Active</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-6 pt-3">
              <label for="validationCustom01" class="form-label">DOI</label>
              <input type="text" class="form-control" placeholder="Exp: 10.2174/1574893616666210708143556" id="validationCustom01" value="" name="doi" required>
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
</div>
</div>
<?php
}
else{
 header('Location:login.php');
}
?>