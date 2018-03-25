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
                      ADD SCHOOLS
                    </h6>
                    
                    <!-- 
                      
                      <div class="form-desc">You can put a table tag inside an <code>.element-box-tp</code> class wrapper and add <code>.table</code> class to it to get something like this:
                      </div> -->
                      <div class="element-box-tp">
                        
                        <div class="table-responsive">
                          <table id="dataTable1" width="100%" class="table table-bordered table-lg table-v2 table-striped">
                            <thead>
                              <tr>
                                
                                <th></th>
                                <th>School</th>
                                <th>Type</th>
                                <th class="empty"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 

                              

                                $query_school = $conn->query("SELECT * FROM lib_schools ") or die("Error");
                                if($query_school->num_rows > 0)
                                {
                                  $sno = 0;
                                  while($row_school = $query_school->fetch_array())
                                    {
                                      $sno+=1;
                                      $school_id = $row_school['school_id'];
                                      $school_name = $row_school['school_name'];
                                      $school_type_id = $row_school['school_type_id'];
                                      ?>
                                        <tr>
                                        
                                        <td class="text-center"><?php echo $sno; ?></td>
                                        <td><?php echo $school_name; ?></td>
                                        <td><?php echo $school_type_id; ?></td>
                                        
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
                        
                      </div>
                    

                  </div>

                    
                </div>
                
              </div>
              
              <!--chat -->

              <!-- end of chat -->
            </div>
            
            <!-- right sidebar -->
            <?php require "adminrightbar.php";?>
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
