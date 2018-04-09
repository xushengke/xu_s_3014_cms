<?php
  function single_edit($tbl,$col,$id) {
    $result = getSingle($tbl, $col, $id);
    $getResult = mysqli_fetch_array($result);
    echo "<form action=\"editall.php\" enctype=\"multipart/form-data\" method=\"post\">";
    echo "<input hidden name=\"tbl\" value=\"{$tbl}\">";
    echo "<input hidden name=\"col\" value=\"{$col}\">";
    echo "<input hidden name=\"id\" value=\"{$id}\">";
    //echo mysqli_num_fields($result);
    for($i=0; $i<mysqli_num_fields($result); $i++) {
      $dataType = mysqli_fetch_field_direct($result,$i);
      $fieldname = $dataType -> name;
      //echo $fieldname."<br>";
      $fieldtype = $dataType -> type;
      //echo $fieldtype."<br>";
      if($fieldname != $col){
        echo "<label>{$fieldname}</label><br>";
        if($fieldtype = "252"){
          if($fieldname != "movies_cover"){
            echo "<textarea name=\"{$fieldname}\">{$getResult[$i]}</textarea><br><br>";
          }else{
            echo "<input type=\"file\" name=\"movies_cover\"><br><br>";
          }
        }
      }
    }
    echo "<input type=\"submit\" name=\"submit\" value=\"Save Content\">";
    echo "</form";
  }


 ?>
