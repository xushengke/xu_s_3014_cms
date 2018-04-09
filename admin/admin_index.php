<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php include('../includes/nav3.html'); ?>
	<h1>Welcome Here to your admin page</h1>
	<div id="admin">
	<?php echo "<h2>Hi-{$_SESSION['user_name']}</h2><br>";
				echo "<p>Last Logintime {$_SESSION['user_date']}</p><br><br>";
	?>
	<a href="admin_createuser.php">Create User</a>
	<a href="admin_edituser.php">Edit User</a>
	<a href="admin_deleteuser.php">Fired</a>
	<a href="admin_addmovie.php">Add Movie</a>
	<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
	</div>
</body>
</html>
