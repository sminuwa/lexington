<?php /*  require header  */ require "header.php";  ?>


  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo.png"></a>
        </div>
        <h4 class="auth-header">
          User Login
        </h4>
        <form action="">
          <div class="form-group">
            <label for="">Username</label><input class="form-control" placeholder="Enter your username" type="text">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label><input class="form-control" placeholder="Enter your password" type="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <button class="btn btn-primary">Log in</button>
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
  </body>
</html>
