<?php
	session_start();
	require "session.php";
	if(isset($_SESSION['USER_ID']))
	{
		unset($_SESSION['USER_ID']);
		header("location: login");
	}
?>