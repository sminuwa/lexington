<?php 
require "session.php";
require "header.php";

switch($user_init)
{
  case 0:
    header("location: initialpage");
    break;
  case 1:
    header("location: overview");
    break;
  
}


?>
