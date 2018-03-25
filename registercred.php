<?php 
session_start();
require "header.php";
  if(!isset($_SESSION['PIN_CODE']))
  {
    header("location: registerpin");
  }
?>
<body>
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo.png"></a>
        </div>
        <h4 class="auth-header">
          Create an account
        </h4>
        <form name="form_register" id="form_register" method="POST">
          <div class="form-group">
            <label for="">Choose Username</label>
            <input name="username" id="username" class="form-control" placeholder="Choose Username" type="text" required>
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Enter e-Mail</label>
            <input name="email" id="email" class="form-control" placeholder="Enter e-Mail" type="text" required>
            <div class="pre-icon os-icon os-icon-email-2-at"></div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Choose Password</label>
                <input name="password" id="password" class="form-control" placeholder="Choose Password" type="password" required>
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Confirm Password</label>
                <input name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" type="password" required>
              </div>
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 0;">
            <label for=""></label>
            <strong style="color:red;text-transform: uppercase;" id="response_message"></strong>
          </div>
          <div class="buttons-w">
            <button type="submit" id="register_btn" class="btn btn-primary">Register Now</button>
          </div>

          <a href="login">Already have an account?</a> | <a href="#">Help and Support</a>
        </form>
      </div>
    </div>


    <?php require "script.php"; ?>

    <script>
      $(document).ready(function(){
        $("#form_register").submit(function(e){
          // prevent the default form submit
          e.preventDefault();


          var formData = $(this).serialize();

          $.ajax({
            type: "POST",
            data: formData,
            url: "register_code.php",
            beforeSend: function(){
              $("#register_btn").prop("disabled", true);
              $("#response_message").html("<img src='img/ajax-loader.gif' />");
            },
            success: function(response){
              //convert response to integer
              response = parseInt(response);
              switch(response){
                case 33:
                  $("#register_btn").prop("disabled", false);
                  $("#response_message").html("Passwords does not march");
                  break;
                case 34:
                  $("#register_btn").prop("disabled", false);
                  location = "validatepin";
                  break;
                case 35:
                  $("#register_btn").prop("disabled", false);
                  alert("Error: (" + response + ") Unable to update PIN at the moment");
                  break;
                case 01:
                  location = "registerack";
                  break;
                default:
                  $("#response_message").html("");
              }
              
            }
          })
        })
      })
    </script>

  </body>
</html>
