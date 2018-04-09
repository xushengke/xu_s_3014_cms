<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
  $tbl = "tbl_user";
  $users = getAll($tbl);
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
	<div class="form">
		<?php
	    while($row = mysqli_fetch_array($users)) {
	      echo "{$row['user_fname']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br><br>";
	    }
	   ?>
	</div>

</body>
</html>
