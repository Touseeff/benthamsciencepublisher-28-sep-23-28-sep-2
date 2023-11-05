<?php
require_once('./admin/database.php');
$sql4 = $conn->prepare("SELECT * from add_subject_list");
$sql4->execute();
$count5 = ($sql4->rowCount());
// echo "<pre>";
// print_r($row1);
?>
<?php
if ($count5 > 0) {
  // echo $row['subjectTitle'];
}
$flag3 = false;
$sql3 = $conn->prepare("SELECT DISTINCT sTitle from add_most_cited_article JOIN add_subject_list on add_most_cited_article.sId=add_subject_list.sId Where articleStatus = 'active'");
$sql3->execute();
$count_re = ($sql3->rowCount());
if ($count_re > 0) {
  $flag3 = true;
}
if ($flag3) {
  ?>
  <div class="main-wrapper">
    <section class="featured-area" id="sub1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" style="text-align: justify;">
            <div class="section pb-4">
              <h3 style="font-size: 40px;">MOST CITED ARTICLES</h3>
            </div>
            <div style="background: #0f2247;
              color: white;
              padding: 15px;
              font-size: 18px;">
              <p>Bentham Science invites you to download and read the Most Cited Articles across its journals, published
                in the years 2022.</p>
              <p>Select your preferred Subject Area from the following list and access the articles of your interest.</p>
            </div>
            <br>
            <div class="tab" style="height: auto;">
              <h3 style="padding: 15px;">Subject List</h3>
              <?php
              while ($row5 = $sql4->fetch(PDO::FETCH_BOTH)) {
                ?>
                <button class="tablinks" onclick="openCity(event, '<?php echo $row5['sTitle'] ?>')" id="defaultOpen">
                  <?php echo $row5['sTitle']; ?>
                </button>
              <?php }
              ?>
            </div>
            <?php
            while ($row3 = $sql3->fetch(PDO::FETCH_BOTH)) {
              ?>
              <!-- <hr> -->
              <div id="<?php echo $row3['sTitle']; ?>" class="tabcontent"
                style="height: auto; padding: 15px; display: block;">
                <h2><u>Articles in
                    <?php echo $row3['sTitle'] ?>
                  </u></h2>
                <?php $d = "'" . $row3['sTitle'] . "'";
                $sql1 = $conn->prepare("SELECT * from add_most_cited_article JOIN add_subject_list on add_most_cited_article.sId=add_subject_list.sId where sTitle=$d  ORDER BY articleId ASC");
                $sql1->execute();
                $count0 = ($sql1->rowCount());
                // $row1 = $sql1->fetch(PDO::FETCH_BOTH);
                ?>
                <?php
                while ($row1 = $sql1->fetch(PDO::FETCH_BOTH)) {
                  // echo"<pre>";
                  // print_r($row1);
                  ?>
                  <h6><a style="color:black;" target="_blank" href="http://dx.doi.org/<?php echo $row1['doi']?>">
                      <?php echo $row1['articleTitle'] ?>
                    </a></h6>
                  <em>Journal Title:
                    <?php echo "{$row1['journalTitle']}" ?> | Year:
                    <?php echo "{$row1['years']}" ?>
                  </em>,
                  <em>Volume:
                    <?php echo "{$row1['volume']}" ?>
                  </em>,
                  <em>Issue:
                    <?php echo "{$row1['issue']}" ?>
                  </em>
                  <br>
                  <em>
                    <?php echo "{$row1['author']}" ?>
                  </em>
                  <br>DOI: <a target="_blank" href="http://dx.doi.org/<?php echo "{$row1['doi']}" ?>">
                    <?php echo "{$row1['doi']}" ?>
                  </a>
                  <hr>
                <?php } ?>
                <?php
                ?>
                <div class="d-grid gap-2 text-white  d-md-flex justify-content-md-end ">
                  <a class="btn btn-primary" style="background: #0f2247;"
                    href="https://benthamarticlealerts.com/BMCARTICLES/" target="_blank" role="button">View
                    more</a>
                </div>
                <?php
                ?>
              </div>
              <?php
              // $sid= $row1['sTitle'];
              // echo $sid;
            } ?>
            <!-- </div> -->
          </div>
        </div>
      </div>
  </div>
  </section>
  </div>
  <?php
}
?>