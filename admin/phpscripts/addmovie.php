<?php
  function addmovie($movieTitle, $cover, $movieYear, $movieRuntime, $movieStoryline, $movieTrailer,$movieRelease, $genre){
    //echo "From addmovie.php";
    include('connect.php');
    if($_FILES['cover']['type'] == "image/jpeg" || $_FILES['cover']['type'] == "image/jpg"){
      $target = "../images/{$cover['name']}";
      if(move_uploaded_file($_FILES['cover']['tmp_name'], $target)){
        //echo "file moved";
        $orig = $target;
        $th_copy = "../images/TH_{$cover['name']}";
        if(!copy($orig, $th_copy)){
          echo "Failed to copy";
        }

        //$size = getimagesize($orig);
        //echo $size[1];
        $userString = "INSERT INTO tbl_movies VALUES(NULL, '{$cover['name']}', '{$movieTitle}', '{$movieYear}', '{$movieRuntime}', '{$movieStoryline}', '{$movieTrailer}', '{$movieRelease}')";//insert the value 1 to the database.
    		//echo $userString;
    		$userQuery = mysqli_query($link, $userString);

    		if($userQuery) {
    			//createUseradmin();
          $qstring = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
          $lastmovie = mysqli_query($link, $qstring);
          $row = mysqli_fetch_array($lastmovie);
          $lastID = $row['movies_id'];
          //echo $lastID;
          $genstring = "INSERT INTO tbl_mov_genre VALUES(NULL, '{$lastID}', '{$genre}')";
          $genresult = mysqli_query($link, $genstring);
    			redirect_to("admin_index.php");

    		}else {
    			$message = "There was a problem setting up this user.  Maybe reconsider your hiring practices.";
    			return $message;
    		}
      }
    }
		mysqli_close($link);
	}



 ?>
