<?php

	function logIn($username, $password, $ip) {
		require_once('connect.php');
		//require_once('user.php');
$username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);
$loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}' AND user_pass = '{$password}'";
		$user_set = mysqli_query($link, $loginstring);
		if(mysqli_num_rows($user_set)){
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			$id = $found_user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $found_user['user_fname'];
			$_SESSION['user_date'] = $found_user['user_date'];
			//$_SESSION['admin'] = false;


			if(mysqli_query($link, $loginstring)){
				$updatestring = "UPDATE tbl_user SET user_ip = '$ip' WHERE user_id={$id}";
				$updatequery = mysqli_query($link, $updatestring);
			}

			if(mysqli_query($link, $loginstring)){
        $updatestring = "UPDATE tbl_user SET user_date = NOW() WHERE user_id = {$id}";
        $updatequery = mysqli_query($link, $updatestring);
      }
			//if the value is 1, change the value to 2 and jump to edit page
			if($found_user['user_first'] == 1){
				$updatestring = "UPDATE tbl_user SET user_first = '2' WHERE user_id={$id}";
				$updatequery = mysqli_query($link, $updatestring);
				//$duration = 10;
				//if($time - $found_user['user_date'] >= $duration){
				redirect_to("admin_edituser.php");
			//}
			}else {
				//the next time when the user login, the value is 2, then jump to index page
				redirect_to("admin_index.php");
			}


			 //redirect_to("admin_index.php");
		}else{
			$message = "Username and or password is incorrect.<br>Please make sure your cap lock key is turned off.";
			return $message;
		}
		mysqli_close($link);
	}


?>
