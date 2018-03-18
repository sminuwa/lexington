<?php require "header.php";?>
<body>
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo.png"></a>
        </div>
        <h4 class="auth-header">
          Create an account
        </h4>
        <form name="form_pin" id="form_pin" action="validate_pin.php" method="POST">
          <div class="form-group">
            <label for=""> Validate PIN</label>
            <input name="account_pin" id="account_pin" class="form-control" placeholder="Enter your PIN" type="text">
            <div class="pre-icon os-icon os-icon-email-2-at2"></div>
          </div>
         
          <div class="buttons-w">
            <button id="pin_btn_continue" class="btn btn-primary">Continue</button>
          </div>

          <a href="#">Already have an account?</a> | <a href="#">Help and Support</a>
        </form>
      </div>
    </div>

<?php require "script.php";?>

<script>
	$(document).ready(function(){
		$("#form_pin").submit(function(e){
			//prevent the form from submitting to 'action' URL
			e.preventDefault();
			//serialise all the form data input by their names and values
			var formData = jQuery(this).serialize();

			$.ajax({
				type: "POST",
				url: "validate_pin.php",
				beforeSend: function(){
					$("#account_pin").prop("disabled", true);

				},
				data: formData,
				success: function(response){
					if(response == "false"){
						$("#account_pin").prop("disabled", false);
						alert("PIN cannot be validated, Try again");
					}else{
						location = "registercred.php";
					}
					
				}
			})
		})
	})
</script>

</body>
</html>
