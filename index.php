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



     if(isset($_POST['submit'])) {
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];


          $query = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password')";
          $result = mysqli_query($connection, $query);

          if($result) {
               echo 'data already exists';
          } else {
               echo 'data already not exists';
          }
     }




?>


<form action="index.php" method="POST">

     <div>
          <label> Username </label>
          <input type="text" name="username" placeholder="Enter Your username" required>
     </div>

     <div>
          <label> Email </label>
          <input type="text" name="email" placeholder="Enter Your Email" required>
     </div>

     <div>
          <label> Password </label>
          <input type="text" name="password" placeholder="Enter Your Password" required>
     </div>


     <div>
          <input type="submit" name="submit" value="submit data">
     </div>
</form>


</body>
</html>