<?php 
require "session.php";
require "header.php";
if($user_init == 0)
      {
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

<!-- ajax -->
    <script>
      $(document).ready(function(){
        //fetch department list
        $("#faculty").change(function(){
          $.ajax({
            type: "POST",
            url: "department_list.php",
            data:{
              faculty: $("#faculty").val()
            },
            beforeSend:function(){
              $("#department").html("<option> -- Wait... --</option");
            },
            success:function(response){
              $("#department").html(response);
            }
          })
        })

        //fetching programmes list
        $("#department").change(function(){
          $.ajax({
            type: "POST",
            url: "programme_list.php",
            data:{
              department: $("#department").val()
            },
            beforeSend:function(){
              $("#programme").html("<option> -- Wait... --</option");
            },
            success:function(response){
              $("#programme").html(response);
            }
          })
        })


        /*
          Submitting the init form
        */
        $("#form_init").submit(function(e){
          e.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: "save_init_form.php",
            data: formData,
            beforeSend: function(){
              /*$("#init_submit_btn").prop("disabled", true);*/
              $("#response_message").html("<img src='img/ajax-loader.gif' />");
            },
            success: function(response){

              response = parseInt(response);
              switch(response)
              {
                case 01:
                  location = "modules";
                  break;
                case 02:
                  $("#init_submit_btn").prop("disabled", false);
                  $("#response_message").html("Error (1)");
                  break;
              
                default:
                  $("#init_submit_btn").prop("disabled", false);
                  $("#response_message").html("");
              }

            }
          })
        })
      })

    </script>

    <?php
      echo '
          <script>
            $(document).ready(function(){
              $("#user_profile").modal("show");
            })
          </script>
        ';
    ?>

  </body>

  <?php
  }
  else
  {
    header("location: index");
  }
?>
</html>
