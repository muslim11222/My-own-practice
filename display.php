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


     ?>
          <table border="1" align="center">
               <tr>
                    <th> id </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Password </th>
                    <th> Delete </th>
                    <th> Update </th>
               </tr>

     <?php



     $query = "SELECT * FROM user_info";
     $result = mysqli_query($connection, $query);

     while($row = $result->fetch_assoc()) {

          ?>
              <tr>
          <?php
               echo "<td>{$row['id']}</td>";
               echo "<td>{$row['username']}</td>";
               echo "<td>{$row['email']}</td>";
               echo "<td>{$row['password']}</td>";

               echo "<td> <a href='delete.php?id={$row['id']}'> Delete </a> </td>";
               echo "<td> <a href='update.php?id={$row['id']}'> update </a> </td>";

          ?>
             </tr>

          <?php


          // echo "{$row['username']}";
          // echo "{$row['email']}";
          // echo "{$row['password']}";
     }

?>

</table>
</body>
</html>