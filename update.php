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

     $query = "SELECT * FROM user_info WHERE id = '$_id'";
     $result = mysqli_query($connection, $query);


    $info = $result->fetch_assoc();

    
?>


  

  <form action="update_data.php" method="POST">


          <div>
               <input type="text" name="id" value="<?php echo "{$info['id']}";?>"hidden>
          </div>

          <div>
               <label> Username </label>
               <input type="text" name="username" value="<?php echo "{$info['username']}"; ?>">
          </div>

          <div>
               <label> Email </label>
               <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
          </div>

          <div>
               <label> Password </label>
               <input type="password" name="password" value="<?php echo "{$info['password']}"; ?> ">
          </div>

          <div>
             <input type="submit" name="update" value="Update Data">
          </div>

     </form>



  
</body>
</html>