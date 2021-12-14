<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>
   <div class="container">
      <nav class="d-flex align-items-center bg-light p-2 mb-3">
         <a href="./" class="logo">CRUD</a>

         <div class="menu d-flex ms-auto">
            <a href="./">Show</a>
            <a href="./create.php">Create</a>
         </div>
      </nav>
      
      <div class="row py-3">
         <div class="col-12 mb-3">
            <h1>Table Listing</h1>

         </div>
         <div class="col">
            <div class="mb-3">
               <a href="create.php" class="btn btn-primary">Create One</a>
            </div>
            
            <?php 
            
            $rows = find('students');
            $nr = count($rows);
         
            if($nr > 0){
         
            ?>
            
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th width="1">#</th>
                     <th>Name</th>
                     <th>Class</th>
                     <th>Phone</th>
                     <th width="1" >Transactions</th>
                  </tr>
               </thead>
               <tbody>
         
               <?php 

               foreach($rows as $row){
                  
                  ?>
                     <tr>
                        <td ><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['class']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td class="ws-nowrap">
                           
                           <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">Update</a>
                           <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                     
                        </td>
                     </tr>
                  <?php 
                  }
               ?>
                  
               </tbody>
            </table>
            <?php } else { ?>
               No data at the table
            <?php } ?>
            
         </div>
      </div>
   </div>
</body>
</html>