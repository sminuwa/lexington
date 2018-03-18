<?php require "header.php";?>
<body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider centered">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo.png"></a>
        </div>
        <h5 class="auth-header">
          Welcome Back
        </h5>
        <form action="">
          <div class="form-group">
            <label for="">Enter your password to access admin</label><input class="form-control" placeholder="Enter your password" type="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary">Log me in</button><a class="btn btn-link" href="/auth/login.html">Login as different user</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
