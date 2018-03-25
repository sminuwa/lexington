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
              <a href="index.html">Home</a>
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
                        echo $content_title;
                      ?>
                    </h6>
                    <div class="element-box">
                      <!-- starting table -->
                      <h5 class="form-header">
                        YOUR COURSES MODULE
                      </h5>
                      <div class="form-desc">You can put a table tag inside an <code>.element-box</code> class wrapper and add <code>.table</code> class to it to get something like this:
                      </div>
                      <div class="controls-above-table">
                        <div class="row">
                          <div class="col-sm-6">
                            
                          </div>
                          <div class="col-sm-6">
                            <form class="form-inline justify-content-sm-end">
                              <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                                <option selected="selected" value="">
                                  Select Status
                                </option>
                                <option value="Pending">
                                  Pending
                                </option>
                                <option value="Active">
                                  Active
                                </option>
                                <option value="Cancelled">
                                  Cancelled
                                </option>
                              </select>
                            </form>
                          </div>
                        </div>
                      </div>

                      <!-- this is the main body information and can be the basic for the analysis -->
                      
                      <div class="row">
                        <?php
                          
                        ?>
                        <div class="col-sm-4">
                          <a href="#" style="text-decoration:none;color:inherit;">
                            <div class="element-box el-tablo">
                              <div class="label">
                                Introduction to computer science
                              </div>
                              <div class="value">
                                DPA101
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
                                Object Oriented Analysis and Design
                              </div>
                              <div class="value">
                                DPA102
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
                                Introduction to digital and multimedia presentation
                              </div>
                              <div class="value">
                                DPA103
                              </div>
                              <div class="trending trending-down-basic">
                                <span>9%</span><i class="os-icon os-icon-graph-down"></i>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="#" style="text-decoration:none;color:inherit;">
                            <div class="element-box el-tablo">
                              <div class="label">
                                Network and Infrastructures Security
                              </div>
                              <div class="value">
                                DPA101
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
                                Introdution to Java
                              </div>
                              <div class="value">
                                DPA101
                              </div>
                              <div class="trending trending-up">
                                <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
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

    <?php require "modals/user_profile.php"; ?>


    <?php require "script.php";?>
    <script>
      $(document).ready(function(){
         var h2 = screen.height - 242;
         $("#imageh").css({'max-height': h2  + 'px','overflow':'auto'});
      });
    </script>

  </body>
</html>
