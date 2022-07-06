<?php

	$con = mysql_connect("localhost", "root", "");
	mysql_select_db("afghan_technology");
	
	if(!isset($_SESSION)) {
		session_start();
	}
	
?>