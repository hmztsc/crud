<?php
include "connection.php";

$sql = "DELETE FROM `crud_test`.`students` WHERE `id`='$id';";
if($query = $cxl->query($sql)) {
   echo "query success";
   header("Location: index.php");
   exit;
} else {
   echo "There is an error<br>";
   echo "Error: ".$cxl->error;
}