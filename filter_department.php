<?php
	require "config.php";
	require "functions.php";

	if(isset($_POST['filter_faculty']))
	{
		if($_POST['filter_faculty'] != "")
		{
			$faculty_name = $_POST['filter_faculty'];
			// fetching the school id
			$query_faculty_id = $conn->query("SELECT * FROM lib_faculties WHERE faculty_name = '$faculty_name' ") or die("Error");
			if($query_faculty_id->num_rows > 0)
			{
				$query_faculty_id = $query_faculty_id->fetch_assoc();
				$faculty_id = $query_faculty_id['faculty_id'];
				// selecting the faculties
				$query_department = $conn->query("SELECT * FROM lib_departments WHERE faculty_id = '$faculty_id' ORDER BY department_name ASC") or die("Error 2");
				if($query_department->num_rows > 0)
				{
					echo '<option value=""> --select department-- </option>';
					while($row_department = $query_department->fetch_assoc())
					{
						echo '<option value="'.$row_department['department_name'].'">'.$row_department['department_name'].'</option>';
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