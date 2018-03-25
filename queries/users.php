<?php
	if(isset($_SESSION['USER_ID']))
	{
		if($_SESSION['USER_ID'] != "")
		{
			$user_id = $_SESSION['USER_ID'];
			//deteching user username and email address
			$queries_user = $conn->query("SELECT * FROM `lib_users` WHERE lib_users.user_id = '".$user_id."' ");
			if($queries_user)
			{
				if($queries_user->num_rows > 0)
				{
					$row_in_queries_user = $queries_user->fetch_assoc();
					$user_name = $row_in_queries_user['user_name'];
					$user_email = $row_in_queries_user['user_email'];
					$user_type_id = $row_in_queries_user['user_type_id'];
					$user_init = $row_in_queries_user['user_init'];
					switch ($user_init) {
						case 0:
							$content_title = "Initial Profile Update";
							break;
						case 1:
							$content_title = "Overview";
							break;
						default:
							$content_title = "";
							break;
					}
					
				}
			}
			else
			{
				/*echo "Error";*/
			}

			//user profile information
			$query_user_profile = $conn->query("SELECT * FROM lib_users_profile WHERE user_id = '".$user_id."' ") or die("Error in profile");
			if($query_user_profile->num_rows > 0)
			{
				$row_user_profile = $query_user_profile->fetch_assoc();
				$programme_id = $row_user_profile['programme_id'];
				$department_id = $row_user_profile['department_id'];
				$faculty_id = $row_user_profile['faculty_id'];
				$date_of_birth = $row_user_profile['dob'];
				$fullname = $row_user_profile['fullname'];

			}
			else
			{
				/*echo "Error";*/
			}

			//fetching the student type id
			$query_user_type = $conn->query("SELECT * FROM lib_users_type WHERE user_type_id = '".$user_type_id."' ") or die("Error");
			if($query_user_type->num_rows > 0)
			{
				$row_user_type = $query_user_type->fetch_assoc();
				$user_type = $row_user_type['user_type_name'];
				
			}
			else
			{
				/*echo "Error";*/
			}
		}
	}
?>