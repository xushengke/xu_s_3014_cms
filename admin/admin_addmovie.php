<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');


	//$ip = $_SERVER['REMOTE_ADDR'];
	//$time = `NOW()`;
	//echo $ip;
	$tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
		$movieTitle = trim($_POST['movieTitle']);
		$cover = $_FILES['cover'];
		$movieYear = trim($_POST['movieYear']);
		$movieRuntime = trim($_POST['movieRuntime']);
		$movieStoryline = trim($_POST['movieStoryline']);
		$movieTrailer = trim($_POST['movieTrailer']);
		$movieRelease = trim($_POST['movieRelease']);
		$genre = $_POST['genList'];
		$uploadMovie = addmovie($movieTitle, $cover, $movieYear, $movieRuntime, $movieStoryline, $movieTrailer,$movieRelease, $genre);
		$message = $uploadMovie;
			// echo $cover['name'];
			// echo $cover['type'];
			// echo $cover['size'];
			// echo $cover['tmp_name'];
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
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data" class="form">
		<label>Movie Title: </label>
		<input type="text" name="movieTitle" value=""><br><br>
		<label>Movie Cover Image:</label>
		<input type="file" name="cover" value=""><br><br>
		<label>Movie Year:</label>
		<input type="text" name="movieYear" value=""><br><br>
		<label>Movie Runtime:</label>
		<input type="text" name="movieRuntime" value=""><br><br>
		<label>Movie Storyline:</label>
		<input type="text" name="movieStoryline" value=""><br><br>
		<label>Movie Trailer:</label>
		<input type="text" name="movieTrailer" value=""><br><br>
		<label>Movie Release:</label>
		<input type="text" name="movieRelease" value=""><br><br>
		<select name="genList">
		<option value="">Please select a genre</option>
		<?php while($row = mysqli_fetch_array($genQuery)){
			echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
		} ?>
		</select><br><br><br>
		<input type="submit" name="submit" value="Add movie">
	</form>
</body>
</html>
