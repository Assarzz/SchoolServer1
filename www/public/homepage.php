<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Homepage!</h1>

        <?php 

        session_start();
        if(isset($_SESSION['loggedIn'])){
            echo "session is the same!";
        }
        
        ?> 
</body>
</html>