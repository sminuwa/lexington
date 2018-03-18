<?php

defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define our database server
defined('DB_USER') ? null : define("DB_USER","root");		  //define our database user
defined('DB_PASS') ? null : define("DB_PASS","");			  //define our database Password
defined('DB_NAME') ? null : define("DB_NAME","lexington"); //define our database Name
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>