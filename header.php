
<?php
    require_once('./admin/database.php');
      $url1 = "";
    if(isset($_GET['url'])){
       $se = $_GET['url'];
       $sql3 = $conn->prepare("SELECT * FROM add_web_header where hTitle =:searchURL");
       $sql3->execute(array(':searchURL'=>$se));
       $row3 = $sql3->fetch(PDO::FETCH_BOTH);
       $count = $sql3->rowCount();
       if($count > 0){
?>
<header>
   <section class="exp-home1-header exp-dark-bg">
          <div class="exp-home1-slider slick-initialized slick-slider slick-dotted">
            <div class="slick-list draggable">
               <div class="slick-track"
                  style="opacity: 1; width: 9443px; transform: translate3d(-1349px, 0px, 0px);">
                  <div class="container-fluid slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                     tabindex="-1" style="width: 1349px;">
                  </div>
                  <div style="max-width: 1503px;" class="container-fluid slick-slide " data-slick-index="1"
                     aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01"
                     aria-describedby="slick-slide-control01" style="width: 1349px;">
                     <div class="container">
                         <div class="row">
                           <div class="col-lg-12 col-content-center">
                            <?php
                            ?>
                              <img src="./admin/images/<?php echo $row3['hImage']?>"  style="width: 100%;"/>
                              <br>
                              <div class="exp-header-item">
                                 <h1 style="font-size: 60px" ; class="text-white">
                                    <?php
                                       $htitle=$row3['hTitle'];
                                       ?>
                                 </h1>
                                 <p style="font-size: 19px;text-align: justify;color: #ffffff !important;">
                                    <?php echo "{$row3['hDescription']}"?>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </section>
    <?php
   }
   else{
      include("./404.php");
      die;
   }
    }
    elseif ($url1 == ""){
    $sql3 = $conn->prepare("SELECT * FROM add_web_header where hTitle ='RICE-UNIVERSITY'");
    $sql3->execute();
    $row3 = $sql3->fetch(PDO::FETCH_BOTH);
    ?>
        <header>
        <section class="exp-home1-header exp-dark-bg">
            <div class="exp-home1-slider slick-initialized slick-slider slick-dotted">
              <div class="slick-list draggable">
                 <div class="slick-track"
                    style="opacity: 1; width: 9443px; transform: translate3d(-1349px, 0px, 0px);">
                    <div class="container-fluid slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                       tabindex="-1" style="width: 1349px;">
                    </div>
                    <div style="max-width: 1503px;" class="container-fluid slick-slide " data-slick-index="1"
                       aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01"
                       aria-describedby="slick-slide-control01" style="width: 1349px;">
                       <div class="container">
                           <div class="row">
                             <div class="col-lg-12 col-content-center">
                              <?php
                              ?>
                                <img src="./admin/images/<?php echo $row3['hImage']?>"  style="width: 100%;"/>
                                <br>
                                <div class="exp-header-item">
                                   <h1 style="font-size: 60px" ; class="text-white">
                                      <?php
                                         $htitle=$row3['hTitle'];
                                         ?>
                                   </h1>
                                   <p style="font-size: 19px;text-align: justify;color: #ffffff !important;">
                                      <?php echo "{$row3['hDescription']}"?>
                                   </p>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
          </div>
      </section>
      <?php 
    }
    ?>