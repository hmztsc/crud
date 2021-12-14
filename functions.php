<?php
require_once('connection.php');

function find($table_name) {
   global $cxl;
   $query = $cxl->query("SELECT * FROM `crud_test`.`$table_name`; ");
   return $rows = $query->fetch_all(MYSQLI_ASSOC);
}
function findOne($table_name, $id) {
   global $cxl;
   $query = $cxl->query("SELECT * FROM `crud_test`.`$table_name` WHERE `id`='$id';");
   $rows = $query->fetch_all(MYSQLI_ASSOC);
   return $rows[0];
}
