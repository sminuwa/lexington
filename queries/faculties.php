<?php
	if($school_id != "")
	{
		//selecting faculties
		$query_faculties = $conn->query("SELECT * FROM lib_faculties WHERE school_id = '".$school_id."' ");
		if($query_faculties)
		{
			if($query_faculties->num_rows > 0){

			}
			else
			{
				echo ("No faculty available");
			}
		}
		else
		{
			echo ("Error in SQL query");
		}
	}
?>