<?php
// starting session
session_start();

// include database configuration file
require "config.php";
// include functions files
require "functions.php";

// assign the input (pin_code) value to $pin_code variable
$pin_code = safe_input($_POST['pin_code']);
$user_type = safe_input($_POST['user_type']);

//detecting user type ID
$query_user_type = $conn->query("SELECT * FROM `lib_users_type` WHERE `lib_users_type`.`user_type_name` = '$user_type' ");
if($query_user_type)
{
	//no error
	if($query_user_type->num_rows > 0)
	{
		//a record has been detected
		$row_user_type = $query_user_type->fetch_assoc();
		$user_type_id = $row_user_type['user_type_id'];
	}
	else
	{
		//no record selected
		/*
		23 represents invalid PIN*/
		unset($_SESSION['PIN_CODE']);
		$response_code = 23;
		goto END;
	}
}
else
{
	//error selecting
	/*
	23 represents invalid PIN*/
	unset($_SESSION['PIN_CODE']);
	$response_code = 23;
	goto END;
}

/* selecting the pin_code and validating the pin_code for registration*/
$query_pin = $conn->query("SELECT * FROM `lib_pins` WHERE `lib_pins`.`pin_code` = '".$pin_code."' AND `lib_pins`.`user_type_id` = '".$user_type_id."' ");
if(!$query_pin)
{
	//error selecting the pin details
	unset($_SESSION['PIN_CODE']);
	$response_code = 22;
	goto END;
}
if($query_pin)
{
	if($query_pin->num_rows > 0)
	{
		$row = $query_pin->fetch_assoc();
		if($row['status'] == 1)
		{
			/*
				PIN has been used by other user
			*/
			$response_code = 24;
			goto END;
		}
		if($row['status'] == 0 && $row['validity'] == 1)
		{
			//success
			$_SESSION['PIN_CODE'] = $pin_code;
			$_SESSION['USER_TYPE_ID'] = $user_type_id;
			$response_code = 01;
			goto END;
		}
		if($row['validity'] == 0)
		{
			/*
				The expired PIN
			*/
			$response_code = 25;
			goto END;
		}
	}else{
		// no such PIN detected
		unset($_SESSION['PIN_CODE']);
		$response_code = 23;
		goto END;
	}	
}

END:
//echo the response code
echo $response_code;

?>