<?php 
require "session.php";
require "header.php";
if($user_init == 0)
{
    header("location: initialpage");
}
?>

  <body>
    <div class="all-wrapper menu-side with-side-panel">
      <div class="layout-w">
        <!-- mobile menu goes here -->
        <?php require "mobile_menu.php"; ?>

        <!-- desktop menu goes here -->
        <?php require "leftbar.php";?>

        <div class="content-w">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index">Home</a>
            </li>
            
            <li class="breadcrumb-item">
              <span>
                <?php
                  echo $school_name;
                ?>
              </span>
            </li>
          </ul>
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>


          <div class="content-i">
            <div class="content-box">
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      <?php
                        // echo $content_title;
                      ?>
                      GENERAL OVERVIEW
                    </h6>
                    <div class="element-box">
                      <!-- starting table -->
                      <!-- <h5 class="form-header">
                        YOUR COURSES MODULE
                      </h5>
                      <div class="form-desc">You can put a table tag inside an <code>.element-box</code> class wrapper and add <code>.table</code> class to it to get something like this:
                      </div> -->
                        <div class="row">
                          <div class="col-sm-6">
                            
                             
                                <!-- <h5 class="form-header">
                                  Powered by Chart.js
                                </h5>
                                 -->
                                
                              
                            
                          </div>
                          
                        </div>

                      <!-- this is the main body information and can be the basic for the analysis -->
                      
                      <div class="row">
                        
                        <div class="col-sm-4">
                          <a href="modules" style="text-decoration:none;color:inherit;">
                            <div class="element-box el-tablo">
                              <div class="label">
                                MODULES AND CONTENTS
                              </div>
                              <div class="value">
                                23
                              </div>
                              <div class="trending trending-up">
                                <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="#" style="text-decoration:none;color:inherit;">
                            <div class="element-box el-tablo">
                              <div class="label">
                                JOURNALS AND ARTICLE
                              </div>
                              <div class="value">
                                100
                              </div>
                              <div class="trending trending-down-basic">
                                <span>12%</span><i class="os-icon os-icon-arrow-2-down"></i>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="#" style="text-decoration:none;color:inherit;">
                            <div class="element-box el-tablo">
                              <div class="label">
                                THESIS AND PROJECT
                              </div>
                              <div class="value">
                                591
                              </div>
                              <div class="trending trending-down-basic">
                                <span>9%</span><i class="os-icon os-icon-graph-down"></i>
                              </div>
                            </div>
                          </a>
                        </div>
                        
                       
                      </div>
                      <!-- this is the end of the main body information -->  



                    </div>
                    <!-- end of table -->
                  </div>
                </div>
                
              </div>
              
              <!--chat -->

              <!-- end of chat -->
            </div>
            

            <!-- right sidebar -->
            <?php require "rightbar.php";?>
            <!-- end of right sidebar -->

          </div>
        </div>


      </div>
      <div class="display-type"></div>
    </div>


    <?php require "script.php";?>
    <script>
      $(document).ready(function(){
         var h2 = screen.height - 242;
         $("#imageh").css({'max-height': h2  + 'px','overflow':'auto'});
      });
    </script>

  </body>
</html>
