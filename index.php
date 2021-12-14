<?php 
include("connection.php");

$query = $cxl->query("show databases;");
while($tempArray = $query->fetch_assoc()){
   $databases[$tempArray['Database']] = "";
}

if(array_key_exists('crud_test', $databases)){

   // echo "Database is exist";
   
   $query = $cxl->query("show tables from crud_test;");
   while($tempArray = $query->fetch_assoc()){
      $tables[$tempArray['Tables_in_crud_test']] = "";
   }

   if(array_key_exists('students', $tables)){
      // echo "a b c tables exist";
      Header("Location: show.php");
      exit;
   } else {
      echo "Database installation was not successfull. Please drop the database and try again.";
   }

} else {
   include("db/create.php");
}