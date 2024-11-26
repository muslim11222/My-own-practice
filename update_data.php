<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     



<?php 

  
     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'db_database';

     $connection = mysqli_connect($hostname, $username, $password, $db_name);

     if($connection) {
          echo 'Connecting to database';
     } else {
          echo 'No database connection';
     }


     

     if(isset($_POST['update'])) {
          $id = $_POST['id'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];


          $query = "UPDATE user_info SET username='$username',  email='$email', password='$password' WHERE id = '$id'";
          $result = mysqli_query($connection, $query);

          if($result) {
               echo 'update successful';
          } else {
               echo 'update failed';
          }
     }

     

?>
</body>
</html>