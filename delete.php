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

     $_id = $_GET['id'];

     $query = "DELETE FROM user_info WHERE id = '$_id'";
     $result = mysqli_query($connection, $query);

     if($result) {
          header("location: display.php");
     } else {
          echo 'database not found';
     }

?>
</body>
</html>