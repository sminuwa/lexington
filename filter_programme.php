<?php
	require "config.php";
	require "functions.php";

	if(isset($_POST['filter_department']))
	{
		if($_POST['filter_department'] != "")
		{
			$department_name = $_POST['filter_department'];
			// fetching the school id
			$query_department_id = $conn->query("SELECT * FROM lib_departments WHERE department_name = '$department_name' ") or die("Error");
			if($query_department_id->num_rows > 0)
			{
				$row_department_id = $query_department_id->fetch_assoc();
				$department_id = $row_department_id['department_id'];
				// selecting the faculties
				$query_programme = $conn->query("SELECT * FROM lib_programmes WHERE department_id = '$department_id' ORDER BY programme_name ASC") or die("Error 2");
				if($query_programme->num_rows > 0)
				{
					echo '<option value=""> --select department-- </option>';
					while($row_programme = $query_programme->fetch_assoc())
					{
						echo '<option value="'.$row_programme['programme_name'].'">'.$row_programme['programme_name'].'</option>';
					}
				}
			}
			else
			{
				echo '<option value=""> --no department-- </option>';
			}
		}
	}
?>