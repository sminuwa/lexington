<?php /*  require header  */ require "header.php";  ?>


  <body>
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo.png"></a>
        </div>

        <h4 class="auth-header">
          User Login
        </h4>
        <form name="form_login" id="form_login" method="POST">
          <div class="form-group">
            <label for="">Username</label>
            <input name="username" id="username" class="form-control" placeholder="Enter your username" type="text" required>
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input name="password" id="password" class="form-control" placeholder="Enter your password" type="password" required>
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="form-group" style="margin-bottom: 0;">
            <label for=""></label>
            <strong style="color:red;text-transform: uppercase;" id="response_message"></strong>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <button type="submit" id="login_btn" class="btn btn-primary">Log in</button>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="form-group">
                <a href="registerpin.php" class="btn btn-primary btn-block">Create an Account</a>
              </div>
            </div>
          </div>

          <a href="#">Forget Password</a> | <a href="#">Help and Support</a>
          
        </form>
        
      </div>
    </div>

    <?php require "script.php";?>
    <script>
      $(document).ready(function(){
        $("#form_login").submit(function(e){
          e.preventDefault();

          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            data: formData,
            url: "login_code.php",
            beforeSend: function(){
              $("#login_btn").prop("disabled", true);
              $("#response_message").html("<img src='img/ajax-loader.gif' />");
            },
            success:function(response){
              response = parseInt(response);
              switch(response) {
                  case 1:
                      location = "<?php if($user_init == 0) {echo 'initialpage'; }else{echo 'overview';} ?>";
                      break;
                  case 5:
                      location = "<?php if($user_init == 0) {echo 'admininitialpage'; }else{echo 'adminmodules';} ?>";
                      break;
                  case 2:
                      $("#login_btn").prop("disabled", false);
                      $("#response_message").html("Error ("+ response +"):" + "Invalid username/password");
                      break;
                  case 11:
                      $("#login_btn").prop("disabled", false);
                      $("#response_message").html("Error ("+ response +"):" + "Invalid username/password");
                    break;
                  case 24:
                      $("#login_btn").prop("disabled", false);
                      $("#response_message").html("pin has been used");
                      break;
                  case 25:
                      $("#login_btn").prop("disabled", false);
                      $("#response_message").html("pin is not valid or blocked");
                      break;
                  default:
                      $("#login_btn").prop("disabled", false);
                      $("#response_message").html("");
              } 
              // alert(response);
            }
          })
        })
      })
    </script>

  </body>
</html>
