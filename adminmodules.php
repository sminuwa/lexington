<?php 
require "session.php";
require "header.php";
if($user_init == 0)
{
    header("location: initialpage");
}
?>

  <body>
    <style>
      #course-content-td{
        background:#ffffff;cursor: pointer;
        padding: 10px;
      }
      #course-content-td:hover{
        box-shadow: 0 2px 30px 0 rgba(45, 130, 255, 0.75);
        webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
        z-index: 10;
      }
      #course-content-td a{
        text-decoration: none;
        color:#012060;
        width:100% auto;
        height:100% auto;
      }
    </style>
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
                        /*echo $content_title;*/
                      ?>
                      MODULE SECTION
                    </h6>
                    
                    <div class="element-box-tp">
                      <!-- 
                      <div class="form-desc">You can put a table tag inside an <code>.element-box-tp</code> class wrapper and add <code>.table</code> class to it to get something like this:
                      </div> -->
                      <div class="element-box">
                        <div class="controls-above-table">
                          <div class="row">
                            <div class="col-sm-4">
                              <!-- <a class="btn btn-sm btn-secondary" href="#">Download CSV</a>
                              <a class="btn btn-sm btn-danger" href="#">Delete</a> -->
                            </div>
                            <div class="col-sm-8">
                              <form class="form-inline justify-content-sm-end">
                                <select class="form-control form-control-sm rounded bright">
                                  <option selected="selected" value="">Select Status</option>
                                </select>
                                <select class="form-control form-control-sm rounded bright">
                                  <option selected="selected" value="">Select Status</option>
                                </select>
                                <select class="form-control form-control-sm rounded bright">
                                  <option selected="selected" value="">Select Status</option>
                                </select>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-bordered table-lg table-v2 table-striped">
                            <thead>
                              <tr>
                                
                                <th>Course Code</th>
                                <th>Course Title</th>
                                <th>Credit Unit</th>
                                <th>Level</th>
                                <th> Semester</th>
                                <th class="empty"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 

                              

                                $query_courses = $conn->query("SELECT * FROM lib_courses WHERE programme_id = '".$programme_id."' ") or die("Error");
                                if($query_courses->num_rows > 0)
                                {
                                  while($row_courses = $query_courses->fetch_array())
                                    {
                                      $course_id = $row_courses['course_id'];
                                      $course_code = $row_courses['course_code'];
                                      $course_title = $row_courses['course_title'];
                                      $course_unit = $row_courses['course_unit'];
                                      $course_level = $row_courses['course_level'];
                                      $course_semester = $row_courses['course_semester'];
                                      ?>
                                        <tr>
                                        
                                        <td class="text-center"><?php echo $course_code; ?></td>
                                        <td><?php echo $course_title; ?></td>
                                        <td class="text-center"><?php echo $course_unit; ?></td>
                                        <td class="text-center"><?php echo $course_level; ?></td>
                                        <td><?php echo $course_semester; ?></td>
                                        <td class="row-actions">
                                          <div class="well" id="course-content-td">
                                          <a href="contents?id=<?php echo $course_id; ?>">
                                            <i class="os-icon os-icon-grid-squares-22"></i> 
                                            Content
                                          </a>
                                        </div>
                                        </td>
                                      </tr>
                                      <?php
                                    }
                                }
                                else
                                {
                                  echo "Error";
                                }
                              ?>

                              
                            </tbody>
                          </table>
                        </div>
                        <div class="controls-below-table">
                          <div class="table-records-info">
                            Showing records 1 - 5
                          </div>
                          <div class="table-records-pages">
                            <ul>
                              <li>
                                <a href="#">Previous</a>
                              </li>
                              <li>
                                <a class="current" href="#">1</a>
                              </li>
                              <li>
                                <a href="#">2</a>
                              </li>
                              <li>
                                <a href="#">3</a>
                              </li>
                              <li>
                                <a href="#">4</a>
                              </li>
                              <li>
                                <a href="#">Next</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>


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
