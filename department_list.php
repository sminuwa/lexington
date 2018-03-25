<?php
	require "config.php";
	if(isset($_POST['faculty']))
	{
		if($_POST['faculty'] != "")
		{
			$faculty_name = $_POST['faculty'];
			//fetching faculty ID
			$query_faculty_id = $conn->query("SELECT * FROM lib_faculties WHERE faculty_name = '".$faculty_name."' ");
			if($query_faculty_id)
			{
				if($query_faculty_id->num_rows > 0)
				{
					$row_faculty_id = $query_faculty_id->fetch_assoc();
					$faculty_id = $row_faculty_id['faculty_id'];
					$query_list_department = $conn->query("SELECT * FROM `lib_departments` WHERE `faculty_id` = '$faculty_id' ORDER BY `department_name` ASC ");
					if($query_list_department)
					{
						if($query_list_department->num_rows > 0)
						{
							echo '<option> -- Select Department -- </option>';
							while($row_list_department = $query_list_department->fetch_array())
							{
								echo '<option value="'.$row_list_department['department_name'].'">'.$row_list_department['department_name'].'</option>';
							}
						}
						else
						{
							echo "No department";
						}
					}
					else
					{
						echo "Error 2".$faculty_id;
					}
				}
			}
			else
			{
				echo "Error 1";
			}
			
		}
	}
?>