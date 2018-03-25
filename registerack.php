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
        <form name="form_ack" id="form_ack" method="POST">
          <div class="form-group">
            <div class="alert alert-success">Your account has been created </div>
          </div>
          <div class="form-group">
            <a href="login" class="btn btn-primary">Login </a>
          </div>
          
        </form>

        
      </div>
    </div>


    <?php require "script.php"; ?>

    

  </body>
</html>
