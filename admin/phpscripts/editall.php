<?php
  include('connect.php');

  $tbl = $_POST['tbl'];
  $col = $_POST['col'];
  $id = $_POST['id'];
  $cover = $_FILES['movies_cover'];
  unset($_POST['tbl']);
  unset($_POST['col']);
  unset($_POST['id']);
  unset($_POST['submit']);
  //echo count($_POST);
  if($_FILES['movies_cover']['type'] == "image/jpeg" || $_FILES['movies_cover']['type'] == "image/jpg"){
      $target = "../../images/{$cover['name']}";
      move_uploaded_file($_FILES['movies_cover']['tmp_name'], $target);
    }else{
      echo "There is something wrong here";
    }



  $num = count($_POST);
  $count = 0;
  $qstring = "UPDATE {$tbl} set ";

  foreach ($_FILES as $key => $value){
      $qstring .= $key."='".$value['name']."',";
  }

  foreach ($_POST as $key => $value) {
    $count++;
    if($count !=$num){
      $qstring .= $key."='".$value."',";
      foreach ($_FILES as $key => $value){
          $qstring .= $key."='".$value['name']."',";
      }
    }else {
      $qstring .= $key."='".$value."' ";
    }
  }





  $qstring .= "WHERE {$col}={$id}";

  $updatequery = mysqli_query($link, $qstring);
  if($updatequery){
    header("Location:../../index.php");
  }else {
    echo "There was a problem with the server, please contact the web admin...Adam";
  }



  mysqli_close($link);
 ?>
