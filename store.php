<?php 
include "connection.php";
         
if(isset($_POST["submit"])){
   $sql = "INSERT INTO `crud_test`.`students` (`name`,`class`,`phone`) VALUES('$name','$class','$phone');";
   if($query = $cxl->query($sql)) {
      echo "query success";
      header("Location: index.php");
      exit;
   } else {
      echo "There is an error<br>";
      echo "Error: ".$cxl->error;
   }
}