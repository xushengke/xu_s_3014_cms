<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	$result = multiReturns(6);
	list($add, $multiply) = multiReturns(123);

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>multiple return</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		echo "Result 1 : {$result[0]}<br>";
		echo "Result 2 : {$result[1]}<br>";
		echo "Result 1 : {$add}<br>";
		echo "Result 2 : {$multiply}<br>";
	?>
</body>
</html>
