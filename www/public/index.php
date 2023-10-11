<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <h1>Logg in page!</h1>

   <form action="index.php" method="post">

      <label for="username">Username</label>
      <input type="text" name="username">

      <label for="password">Password</label>
      <input type="password" name="password">


      <input type="submit" value="Log in!">



          <?php
          
         $username = $_POST["username"];
         $password = $_POST["password"];

         echo $username;
         echo $password;
          
          ?> 

   </form>
   
</body>
</html>