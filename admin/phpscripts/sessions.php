<?php
	session_start();


	function confirm_logged_in() {
		if(!isset($_SESSION['user_id'])){
			redirect_to("admin_login.php");
		}
	}


	function logged_out() {
		//$admin = $_SESSION['admin'];
		session_destroy();
		//$_SESSION['admin'] = $admin;

		redirect_to("../admin_login.php");
	}

?>
