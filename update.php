<?php 
include "connection.php";
if(isset($_POST["submit"])){

   $sql = "UPDATE `crud_test`.`students` SET `name`='$name', `class`='$class', `phone`='$phone' WHERE `id`='$id';";

   if($query = $cxl->query($sql)) {
      echo "query success";
      header("Location: index.php");
      exit;
   } else {
      echo "There is an error<br>";
      echo "Error: ".$cxl->error;
   }
}