<?php

	require_once("connection.php");

	unset($_SESSION["login"]);
	
	header("location:index.php?logout=done");
	
?>