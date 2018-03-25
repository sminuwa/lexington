<?php
	
	if(isset($_SESSION['SCHOOL_ID']))
	{
		if($_SESSION['SCHOOL_ID'] != "")
		{
			$school_id = $_SESSION['SCHOOL_ID'];

			$queries_school = $conn->query("SELECT * FROM lib_schools WHERE school_id = '$school_id' ") or die($conn->error);
			if($queries_school->num_rows > 0)
			{
				$row_school = $queries_school->fetch_assoc();
				$school_name = $row_school['school_name'];
			}
		}

	}

	//selecting the all schools
	$query_all_schools = $conn->query("SELECT * FROM lib_schools ORDER BY school_name ASC") or die($conn->error);
	
?>