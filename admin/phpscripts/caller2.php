<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('config.php');

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>multiple return</title>
<link rel="stylesheet" href="../css/main.css">
</head>
<body>

	<h1>Welcome Here to your edit content page</h1>
	<div class="form">
	   <?php if(isset($_GET['caller_id'])){
   		$dir = $_GET['caller_id'];
      if($dir == 'contact'){
  			$id1 = $_GET['id'];
  			single_edit("tbl_movies","movies_id",$id1);
  		}
      else{
  			echo "Caller id was passed incorrectly";
  		}
    }
			// phpinfo();
		?>
	</div>

</body>
</html>
