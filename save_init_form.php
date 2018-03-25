<?php
	session_start();
	require "config.php";
	require "functions.php";
	$user_id = $_SESSION['USER_ID'];
	$fullname = safe_input($_POST['fullname']);
	$registration_no = safe_input($_POST['registration_no']);
	$gender = safe_input($_POST['gender']);
	$faculty = safe_input($_POST['faculty']);
	$department = safe_input($_POST['department']);
	$programme = safe_input($_POST['programme']);
	$dob = safe_input($_POST['dob']);

	//fetching the IDs : FACULTY
	$query_faculty = $conn->query("SELECT * FROM lib_faculties WHERE faculty_name = '$faculty' ");
	if($query_faculty)
	{
		if($query_faculty->num_rows > 0)
		{
			$row_faculty = $query_faculty->fetch_assoc();
			$faculty_id = $row_faculty['faculty_id'];
		}
		else
		{
			$response_code = 03;
			goto END;
		}
	}
	else
	{
		$response_code = 02;
		goto END;
	}

	// DEPARTMENT
	$query_department = $conn->query("SELECT * FROM lib_departments WHERE department_name = '$department' ");
	if($query_department)
	{
		if($query_department->num_rows > 0)
		{
			$row_department = $query_department->fetch_assoc();
			$department_id = $row_department['department_id'];
		}
		else
		{
			$response_code = 03;
			goto END;
		}
	}
	else
	{
		$response_code = 02;
		goto END;
	}

	// PROGRAMME
	$query_programme = $conn->query("SELECT * FROM lib_programmes WHERE programme_name = '$programme' ");
	if($query_programme)
	{
		if($query_programme->num_rows > 0)
		{
			$row_programme = $query_programme->fetch_assoc();
			$programme_id = $row_programme['programme_id'];
		}
		else
		{
			$response_code = 03;
			goto END;
		}
	}
	else
	{
		$response_code = 02;
		goto END;
	}

	/*saving init form information*/
	$query_save_init = $conn->query("INSERT INTO lib_users_profile 
									( 
									user_id, 
									fullname, 
									registration_no, 
									gender, 
									dob, 
									faculty_id, 
									department_id, 
									programme_id, 
									picture
									) 
									VALUES
									(
									'$user_id',
									'$fullname',
									'$registration_no',
									'$gender',
									'$dob',
									'$faculty_id',
									'$department_id',
									'$programme_id',
									'profile_picture.png'
									 ) 
								");
	if($query_save_init)
	{
		// updating the 
		$query_update_user_init = $conn->query("UPDATE lib_users SET user_init = 1 WHERE user_id = '$user_id' ");
		$response_code = 01;
	}
	else
	{
		$response_code = 02;
	}

	END:
	echo $response_code;
?>