<?php require "header.php";?>
  <body>
    <div class="all-wrapper menu-side with-side-panel">
      <div class="layout-w">
        <!-- mobile menu goes here -->
        <?php require "mobile_menu.php"; ?>

        <!-- desktop menu goes here -->
        <div class="desktop-menu menu-side-w menu-activated-on-click">
          <div class="logo-w">
            <a class="logo" href="index.html"><img src="img/logo.png"></a>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="img/profile_picture.png">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  Sunusi Mohd Inuwa
                </div>
                <div class="logged-user-role">
                  Student
                </div>
              </div>
              <div class="logged-user-menu">
                <div class="avatar-w">
                  <img alt="" src="img/profile_picture.png">
                </div>
                <div class="logged-user-info-w">
                  <div class="logged-user-name">
                    Sunusi Mohd Inuwa
                  </div>
                  <div class="logged-user-role">
                    Student
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <ul class="main-menu">
              <li>
                <a href="index.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-window-content"></div>
                  </div>
                  <span>Overview</span></a>
              </li>
              <li class="active">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-delivery-box-2"></div>
                  </div>
                  <span>Modules</span></a>
                
              </li>
              <li>
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-agenda-1"></div>
                  </div>
                  <span>Books</span></a>
              </li>
              <li>
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-tasks-checked"></div>
                  </div>
                  <span>Journals</span></a>
              </li>
              <li>
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-grid-squares"></div>
                  </div>
                  <span>Projects</span></a>
              </li>
              <li>
                <a href="#">
                  <div class="icon-w">

                    <div class="os-icon os-icon-mail-07"></div>
                  </div>
                  <span>Discussion</span></a>
              </li>
              
            </ul>
            
          </div>
        </div>
        <div class="content-w">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            
            <li class="breadcrumb-item">
              <span>Modules</span>
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
                      FEDERAL COLLEGE OF EDUCATION, ZARIA
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
            <div class="content-panel">
              <div class="content-panel-close">
                <i class="os-icon os-icon-close"></i>
              </div>
              <div class="element-wrapper">
                <h6 class="element-header">
                  Quick search
                </h6>
                <div class="element-box-tp">
                  <div class="input-search-w">
                    <input class="form-control rounded bright" placeholder="Search team members..." type="search">
                  </div>
                </div>
              </div>
              <div class="element-wrapper">
                <h6 class="element-header">
                  Filter
                </h6>
                <div class="element-box-tp">
                  
                </div>
              </div>
            </div>
            <!-- end of right sidebar -->

          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>

    <?php require "script.php";?>

  </body>
</html>
