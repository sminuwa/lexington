<?php
	require "config.php";
	if(isset($_POST['department']))
	{
		if($_POST['department'] != "")
		{
			$department_name = $_POST['department'];
			//fetching faculty ID
			$query_department_id = $conn->query("SELECT * FROM lib_departments WHERE department_name = '".$department_name."' ");
			if($query_department_id)
			{
				if($query_department_id->num_rows > 0)
				{
					$row_department_id = $query_department_id->fetch_assoc();
					$department_id = $row_department_id['department_id'];
					$query_list_programme = $conn->query("SELECT * FROM `lib_programmes` WHERE `department_id` = '$department_id' ORDER BY `programme_name` ASC ");
					if($query_list_programme)
					{
						if($query_list_programme->num_rows > 0)
						{
							echo '<option> -- Select Programme -- </option>';
							while($row_list_programme = $query_list_programme->fetch_array())
							{
								echo '<option value="'.$row_list_programme['programme_name'].'">'.$row_list_programme['programme_name'].'</option>';
							}
						}
						else
						{
							echo "No Programme";
						}
					}
					else
					{
						echo "Error 2".$department_id;
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