<?php 
include 'process.php';
$result = mysqli_query($conn,"SELECT * FROM user");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }         
         
      </style>

</head>
<body>
   

<!-- <form method="get" action="save.php">
Username<input type="text" name="myname" ><br>
Password<input type="password" name="myPass" ><br>
<input type="submit" value="Login" >
 
</form> -->


<div class="container">
         <h1 class="text-center m-5"> Manage users</h1>

   <div class="row justify-content-center">
         <table class="table">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Status</th> 
                  <th colspan="2">Action</th>              
               </tr>            
            </thead>
            <?php
            $i=0;
            while ($row = mysqli_fetch_array($result)){
            ?>  
               <td><?php  echo $row['user_id']?></td>       
               <td><?php  echo $row['username'];?></td>
               <td><?php  echo $row['password'];?></td>
               <td><?php  echo $row['status'];?></td>
               <td>
                     <a href="edit-process.php?edit=<?php echo $row['user_id'];?>"
                        class="btn btn-info">Edit</a>
                     <a href="delete-process.php?delete=<?php echo $row['user_id']?>"
                        class="btn btn-danger">Delete</a>
               </td>
         </tr>
            <?php 
            $i++;
            }
            ?>
         </table> 
   </div>



   <?php
   
?>
</div>

<div class="row justify-content-center">
         <form action="create-process.php" method="POST">
            <div class="form-group">
               <label>Username</label>
               <input type="text" name="username" class="form-control"  required autofucos>
            </div>
            <div class="form-group">
               <label>Password</label>
               <input type="password" name="password" class="form-control" required >
            </div>
            <div class="form-group">
               <label>Status</label>
               <input type="text" name="status"class="form-control"  required>
            </div>
            <div class="gorm-group">
               <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
         </form>
</div>


</body>
</html>
