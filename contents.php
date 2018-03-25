<?php 
require "session.php";
require "header.php";
if($user_init == 0)
{
    header("location: initialpage");
}
if(!isset($_GET['id']))
{
  header("location: modules");
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
                  <?php
                  if(isset($_GET['con']))
                  {
                    if($_GET['con'] != "")
                    {
                      $query_contents = $conn->query("SELECT * FROM lib_contents WHERE content_id = '".$_GET['con']."' ") or die("Error");
                      $row_contents = $query_contents->fetch_assoc();  
                      ?>
                        <script>
                          $("#imageh2").css({'max-height': h2  + 'px','overflow':'auto','min-height': h2  + 'px',});
                        </script>
                        <iframe src="lib_content/content1.docx" width="100%" id="imageh2"></iframe>
                      <?php
                    }
                  }
                  else
                  {

                  ?>
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      <?php
                        /*echo $content_title;*/
                      ?>
                      CONTENT SECTION
                    </h6>
                    
                    <div class="element-box">
                      <!-- 
                      <div class="form-desc">You can put a table tag inside an <code>.element-box-tp</code> class wrapper and add <code>.table</code> class to it to get something like this:
                      </div> -->
                      <div class="element-box-tp">
                        <div class="controls-above-table">
                          <div class="row">
                            <div class="col-sm-4">
                              <a class="btn btn-sm btn-secondary" href="modules">Modules</a>
                            </div>
                            <div class="col-sm-4">
                              <form name="form_filter_content_category" id="form_filter_content_category" class="form-inline justify-content-sm-end" method="post" action="">
                                <div class="form-group">
                                  <label for="">Filter </label> 
                                  <select name="filter_content_category" id="filter_content_category" class="form-control form-control-sm rounded bright" required>
                                    <option selected="selected" value=""><?php if(isset($_GET['cat'])){echo $_GET['cat'];}else{echo '--Filter by category--';}?></option>
                                    <?php 
                                      $query_category_type = $conn->query("SELECT * FROM lib_contents_category ORDER BY content_category_name ASC") or die("Error");                                    
                                      while($row_category_type = $query_category_type->fetch_array())
                                      {
                                        echo '<option>'.$row_category_type['content_category_name'].'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </form>
                            </div>
                            <div class="col-sm-4">
                              <form name="form_filter_content_type" is="form_filter_content_type" class="form-inline justify-content-sm-end" method="post" action="">
                                <div class="form-group">
                                  <label for="">Filter </label> 
                                  <select name="filter_content_type" id="filter_content_type" class="form-control form-control-sm rounded bright" required>
                                    <option selected="selected" value=""><?php if(isset($_GET['type'])){echo $_GET['type'];}else{echo '--Filter by type--';}?></option>
                                    <?php 
                                      $query_content_type = $conn->query("SELECT * FROM lib_contents_type ORDER BY content_type_name ASC") or die("Error");                                    
                                      while($row_content_type = $query_content_type->fetch_array())
                                      {
                                        echo '<option>'.$row_content_type['content_type_name'].'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-bordered table-lg table-v2 table-striped">
                            <!-- <thead>
                              <tr>
                                
                                <th></th>
                                <th>Details</th>
                                <th class="empty"></th>
                              </tr>
                            </thead> -->
                            <tbody>
                              <?php 
                                $course_id = $_GET['id'];
                                if(isset($_GET['cat'])){
                                  $category_name = $_GET['cat'];
                                  //fetching the content category id
                                  $query_category_id = $conn->query("SELECT * FROM lib_contents_category WHERE content_category_name = '".$category_name."' ") or die("Error");
                                  $row_category_id = $query_category_id->fetch_assoc();
                                  $category_id = $row_category_id['content_category_id'];
                                  $query_contents = $conn->query("SELECT * FROM lib_contents WHERE course_id = '".$course_id."' AND content_category_id = '".$category_id."' ") or die("Error");  
                                }elseif(isset($_GET['type'])){
                                  $type_name = $_GET['type'];
                                  //fetching the content type id
                                  $query_type_id = $conn->query("SELECT * FROM lib_contents_type WHERE content_type_name = '".$type_name."' ") or die("Error");
                                  $row_type_id = $query_type_id->fetch_assoc();
                                  $type_id = $row_type_id['content_type_id'];
                                  $query_contents = $conn->query("SELECT * FROM lib_contents WHERE course_id = '".$course_id."' AND content_type_id = '".$type_id."' ") or die("Error");  
                                }else{
                                  $query_contents = $conn->query("SELECT * FROM lib_contents WHERE course_id = '".$course_id."' ") or die("Error");  
                                }
                                if($query_contents->num_rows > 0)
                                {
                                  $sno = 0;
                                  while($row_contents = $query_contents->fetch_array())
                                    {
                                      $sno = $sno + 1;
                                      $content_id = $row_contents['content_id'];
                                      $content_name = $row_contents['content_name'];
                                      $content_category_id = $row_contents['content_category_id'];
                                      $content_type_id = $row_contents['content_type_id'];
                                      $content_date_created = $row_contents['content_date_created'];

                                      //fetching the content type
                                      $query_category = $conn->query("SELECT * FROM lib_contents_category WHERE content_category_id = '".$content_category_id."' ") or die("Error");
                                      $row_category = $query_category->fetch_assoc();
                                      $content_category = $row_category['content_category_name'];

                                      //fetching content type
                                      $query_type = $conn->query("SELECT * FROM lib_contents_type WHERE content_type_id = '".$content_type_id."' ") or die("Error");
                                      $row_type = $query_type->fetch_assoc();
                                      $content_type = $row_type['content_type_name'];

                                      if($content_type == "pdf"){
                                        $image = '<img src="img/content-type/pdf.png" />';
                                      }elseif($content_type == "word"){
                                        $image = '<img src="img/content-type/word.png" />';
                                      }elseif($content_type == "excel"){
                                        $image = '<img src="img/content-type/excel.png" />';
                                      }elseif($content_type == "text"){
                                        $image = '<img src="img/content-type/text.png" />';
                                      }elseif($content_type == "image"){
                                        $image = '<img src="img/content-type/image.png" />';
                                      }elseif($content_type == "powerpoint"){
                                        $image = '<img src="img/content-type/powerpoint.png" />';
                                      }else{
                                        $image = '<img src="img/content-type/file.png" />';
                                      }



                                      ?>
                                        <tr>
                                        
                                        <td class="text-center">
                                          <?php echo $image; ?>
                                        </td>
                                        <td>
                                          <strong>Description: </strong><?php echo $content_name; ?><br>
                                          <strong>Content Category: </strong><?php echo $content_category; ?><br>
                                          <strong>Date Created: </strong><?php echo $content_date_created; ?><br>
                                          <strong>Type: </strong><?php echo $content_type;?><br>
                                          <a href="#" id="" class="btn btn-sm btn-secondary">Download</a>
                                          <a href="#" id="read<?php echo $content_id; ?>" class="btn btn-sm btn-primary">Read</a>
                                          
                                        </td>
                                        
                                        
                                      </tr>
                                      <?php require "modals/read_content.php";?>

                                      <?php
                                    }
                                }
                                else
                                {
                                  echo "No record";
                                }
                              ?>

                              
                            </tbody>
                          </table>
                        </div>
                        
                      </div>
                    </div>


                  </div>

                  <?php

                  }
                  
                ?>  
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
        $("#filter_content_category").change(function(){
          location = "contents?id=<?php echo $course_id;?>&cat=" + $("#filter_content_category").val();
        })
        $("#filter_content_type").change(function(){
          location = "contents?id=<?php echo $course_id;?>&type=" + $("#filter_content_type").val();
        })
      })
    </script>
    

  </body>
</html>
