<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movies_id";
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php
		include('includes/nav2.html');

		echo"<section id=\"content\">
			<h2 class=\"hidden\"></h2>";

		if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
			echo "<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\" id=\"deimg\">
				<div id=\"info\">
					<h2>{$row['movies_title']}</h2>
					<p>{$row['movies_year']}</p><br><br>
					<p>{$row['movies_storyline']}</p><br><br>
				</div>
				<video controls id=\"video\">
					<source src=\"videos/{$row['movies_trailer']}\" type=\"video/mp4\"/>
				</video>
				<a href=\"admin/phpscripts/caller2.php?caller_id=contact&id={$row['movies_id']}\" id=\"editcontent\"><p>Edit Movie</p></a><br><br><br>
				";
		}else{
			echo "<p class=\"error\">{$getSingle}</p>";
		}

		echo"</section>";
	?>
</body>
</html>
