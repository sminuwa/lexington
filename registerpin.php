<?php 
require "header.php";

?>
<body>
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="img/logo.png"></a>
        </div>
        <h4 class="auth-header">
          Validate your PIN
        </h4>
        <form name="form_pin" id="form_pin" action="validate_pin.php" method="POST">
          <div class="form-group">
            <label for="">Enter a PIN:</label>
            <input name="pin_code" id="pin_code" class="form-control" placeholder="Enter your PIN" type="text" required>
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="form-group">
            <label for="">I'm a/an:</label>
            <select name="user_type" id="user_type" class="form-control" placeholder="Enter your PIN" type="text" required>
            	<option> --Select-- </option>
            	<?php
            		$user_type = $conn->query("SELECT * FROM lib_users_type");
            		if($user_type)
            		{
            			while($row = $user_type->fetch_array())
            			{
            				?>
            					<option value="<?php echo $row['user_type_name'];?>"><?php echo $row['user_type_name'];?></option>
            				<?php
            			}
            		}
            		else
            		{
            			die("Error has occurred");
            		}
            	?>
            </select>
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group" style="margin-bottom: 0;">
            <label for=""></label>
            <strong style="color:red;text-transform: uppercase;" id="response_message"></strong>
          </div>
          <div class="buttons-w">
            <button type="submit" id="pin_btn_validate" class="btn btn-primary">Validate</button>
          </div>

          <a href="login">Already have an account?</a> | <a href="#">Help and Support</a>
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
					$("#pin_btn_validate").prop("disabled", true);
					$("#response_message").html("<img src='img/ajax-loader.gif' />");
				},
				data: formData,
				success: function(response){
					// alert(response);
					/*if(response == 22){
						$("#pin_btn_validate").prop("disabled", false);
						$("#validation_response").html("Error connecting server");
					}
					if(response == 23)
					{
						$("#pin_btn_validate").prop("disabled", false);
						$("#response_message").html("Invalid Pin");
					}
					if(response == 01)
					{
						location = "registercred.php";
					}*/
					response = parseInt(response);
					switch(response) {
					    case 01:
					        location = "registercred.php";
					        break;
					    case 22:
					        $("#pin_btn_validate").prop("disabled", false);
						    $("#response_message").html("Error connecting server");
					        break;
					    case 23:
					        $("#pin_btn_validate").prop("disabled", false);
						    $("#response_message").html("Invalid Pin");
						    break;
						case 24:
					        $("#pin_btn_validate").prop("disabled", false);
						    $("#response_message").html("pin has been used");
					        break;
					    case 25:
					        $("#pin_btn_validate").prop("disabled", false);
						    $("#response_message").html("pin is not valid or blocked");
					        break;
					    default:
					        $("#pin_btn_validate").prop("disabled", false);
					        $("#response_message").html("");
					} 
					
				}
			})
		})
	})
</script>

</body>
</html>
