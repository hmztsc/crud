<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create</title>
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
            <h1>Create Entry</h1>
         </div>
         <div class="col-md-6">
            
            <form action="store.php" method="POST">

               <div class="form-floating mb-3">
                  <input type="text" name="name" maxlength="25"  class="form-control" id="name" placeholder="Name" required>
                  <label for="name">Name</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="class" maxlength="5"  class="form-control" id="class" placeholder="Class" required>
                  <label for="class">Class</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="text" name="phone" maxlength="25"  class="form-control" id="phone" placeholder="Phone" required>
                  <label for="phone">Phone</label>
               </div>

               <div class="text-end mt-3">
                  <input type="submit" name="submit" class="btn btn-primary" value="Create"/>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>
</html>