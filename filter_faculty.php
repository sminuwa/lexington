<?php
	require "config.php";
	require "functions.php";

	if(isset($_POST['filter_school']))
	{
		if($_POST['filter_school'] != "")
		{
			$school_name = $_POST['filter_school'];
			// fetching the school id
			$query_school_id = $conn->query("SELECT * FROM lib_schools WHERE school_name = '$school_name' ") or die("Error");
			if($query_school_id->num_rows > 0)
			{
				$row_school_id = $query_school_id->fetch_assoc();
				$school_id = $row_school_id['school_id'];
				// selecting the faculties
				$query_faculty = $conn->query("SELECT * FROM lib_faculties WHERE school_id = '$school_id' ORDER BY faculty_name ASC") or die("Error 2");
				if($query_faculty->num_rows > 0)
				{
					echo '<option value=""> --select faculty-- </option>';
					while($row_faculty = $query_faculty->fetch_assoc())
					{
						echo '<option value="'.$row_faculty['faculty_name'].'">'.$row_faculty['faculty_name'].'</option>';
					}
				}
			}
			else
			{
				echo '<option value=""> --no faculty-- </option>';
			}
		}
	}
?>