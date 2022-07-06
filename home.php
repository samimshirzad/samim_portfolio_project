<?php

	require_once("connection.php");
	
	if(!isset($_SESSION["login"])) {
		header("location:index.php?authorize=failed");
	}
?>
<?php require_once("top.php"); ?>

<?php require_once("footer.php"); ?>