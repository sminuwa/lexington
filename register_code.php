<?php

// starting session
	session_start();
	require "config.php";
	require "functions.php";

	$username = safe_input($_POST['username']);
	$email = safe_input($_POST['email']);
	$password = safe_input($_POST['password']);
	$confirm_password = safe_input($_POST['confirm_password']);
	$pin_code = $_SESSION['PIN_CODE'];
	$pin_type_id = $_SESSION['USER_TYPE_ID'];

	if($confirm_password != $password){
		// passwords not march
		$response_code = 33;
		goto END;
	}
	if($pin_code == "")
	{
		// PIN CODE is empty
		$response_code = 34;
		goto END;
	}

	$password = md5($password);

	// detecting the PIN CODE ID in the database
	$query_pin = $conn->query("SELECT * FROM `lib_pins` WHERE `lib_pins`.`pin_code` = '".$pin_code."' ") or die($conn->error);
	// fetching the information
	$row_pin = $query_pin->fetch_assoc();
	// assigning the PIN ID to $pin_id variable
	$pin_id = $row_pin['pin_id'];

	// checking if the username has been taken
	$query_check_username = $conn->query("SELECT * FROM `lib_users` WHERE `lib_users`.`user_name` = '".$username."' ");
	if($query_check_username->num_rows > 0)
	{
		// username already exist
		$response_code = 36;
	}

	$query_register = $conn->query("INSERT INTO `lib_users` (`user_name`, `user_email`, `user_pass`, `user_init`, `pin_id`, `user_type_id`) VALUES('".$username."', '".$email."', '".$password."', '0', '".$pin_id."', '".$pin_type_id."') ") or die($conn->error);
	if($query_register)
	{

		$query_update_pin = $conn->query("UPDATE `lib_pins` SET `lib_pins`.`status` = 1 WHERE `lib_pins`.`pin_id`='".$pin_id."' ") or die($conn->error);
		if(!$query_update_pin)
		{
			// cannot update pin
			$response_code = 35;
		}
		else
		{
			/*
			valid username
			valid email address
			*/
			$response_code = 01;
		    
		}

		
	}

	END:
	echo $response_code;
?>