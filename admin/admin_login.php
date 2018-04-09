<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');


	$ip = $_SERVER['REMOTE_ADDR'];
	//$time = `NOW()`;
	//echo $ip;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php include('../includes/nav3.html'); ?>
	<h1>Welcome Here!</h1>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_login.php" method="post" class="form">
		<label>Username:</label>
		<input type="text" name="username" value="">
		<br><br><br>
		<label>Password:</label>
		<input type="text" name="password" value="">
		<br><br><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>
