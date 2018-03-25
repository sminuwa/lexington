<?php
	session_start();
	require "config.php";
	require "functions.php";

	$username = safe_input($_POST['username']);
	$password = safe_input($_POST['password']);

	$query_login = $conn->query("SELECT * FROM `lib_users` WHERE `user_name` = '$username' ") or die($conn->error);
    if($query_login->num_rows > 0)
    {


		$row_login = $query_login->fetch_assoc();

		$password = md5($password);

		if ($password == $row_login['user_pass']) 
		{
			// password is valid
			
		    // checking if student is new
		    $query_selection = $conn->query("SELECT * FROM `lib_users` WHERE `lib_users`.`user_name`='$username' ") or die($conn->error);
		    $row_selection = $query_selection->fetch_assoc();

		    //check which university does the PIN belong to
		    $pin_id=$row_selection['pin_id'];
		    $query_pin = $conn->query("SELECT * FROM lib_pins WHERE lib_pins.pin_id = '$pin_id' ") or die($conn->error);
		    if($query_pin->num_rows > 0)
		    {
		    	//if pin has been detected
		    	$row_pin = $query_pin->fetch_assoc();

		    	//selecting the school
		    	$school_id = $row_pin['school_id'];
		    	$query_school = $conn->query("SELECT * FROM lib_schools WHERE lib_schools.school_id = '$school_id' ") or die($conn->error);
		    	if($query_school)
		    	{
		    		//school detected
		    		$row_school = $query_school->fetch_assoc();
		    		$school_name = $row_school['school_name'];

		    		//user type id
		    		//fetching the student type id
					$query_user_type = $conn->query("SELECT * FROM lib_users_type WHERE user_type_id = '".$row_login['user_type_id']."' ") or die("Error");
					if($query_user_type->num_rows > 0)
					{
						$row_user_type = $query_user_type->fetch_assoc();
						$user_type = $row_user_type['user_type_name'];

						if($user_type == "Administrator")
						{
							$response_code = 05;
						}
						else
						{
							$response_code = 01;
						}
						
					}
					else
					{
						/*echo "Error";*/
					}
		    		
		    	}
		    }

			
		} 
		else 
		{
			// in valid password
		    $response_code = 11;
		    goto END;
		}

		// creating sessions
		$_SESSION['USER_ID'] = $row_login['user_id'];
		$_SESSION['SCHOOL_ID'] = $row_school['school_id'];
		$_SESSION['PIN_ID'] = $row_pin['pin_id'];
	}
	else
	{
		// no record found
		$response_code = 02;
	}

	END:
	echo $response_code;
?>