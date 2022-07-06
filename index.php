<?php
	
	require_once("connection.php");
	
	if(isset($_POST["username"])) {
	
		$user = $_POST["username"];
		$pass = $_POST["password"];
		
		$recordset = mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'", $con);
			
		if(mysql_num_rows($recordset) == 1) {
			$row_recordset = mysql_fetch_assoc($recordset);
			$_SESSION["login"] = $row_recordset["user_id"];
			header("location:home.php");
		}
		else {
			header("location:index.php?login=failed");
		}
	
	}
	
?>
<?php require_once("top.php"); ?>

<h2>Login to System</h2>

<div class="form-resize">

<?php if(isset($_GET["logout"])) { ?>
<div class="alert alert-success	alert-dismissable">
	<button class="close" area-hidden="true" data-dismiss="alert">&times;</button>
	You Are Successfully Logged Out!
</div>
<?php } ?>


<?php if(isset($_GET["authorize"])) { ?>
<div class="alert alert-danger alert-dismissable">
	<button class="close" area-hidden="true" data-dismiss="alert">&times;</button>
	You Must Login First!
</div> 
<?php } ?>

<?php if(isset($_GET["login"])) { ?>
<div class="alert alert-danger alert-dismissable">
	<button class="close" area-hidden="true" data-dismiss="alert">&times;</button>
	Incorrect Username or Password!
</div>
<?php } ?>

<form method="post">
	<div class="input-group">
		<span class="input-group-addon">Username:</span>
		<input type="text" class="form-control" name="username">
	</div>
	
	<div class="input-group">
		<span class="input-group-addon">Password:</span>
		<input type="password" class="form-control" name="password">
	</div>
	
	<input type="submit" class="btn btn-primary" value="Login">
</form>

</div>

<?php require_once("footer.php"); ?>