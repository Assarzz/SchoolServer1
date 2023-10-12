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

        echo "<h1>". $_GET["message"] . "</h1>";

        session_start();
        if(isset($_SESSION['loggedIn'])){

            echo "<h1>Welcome back " . $_SESSION["username"] . "</h1>";
            
        }
        else{
            echo "<h1>how is this even possible? are you hacking?</h1>";
        }
        
        ?> 
</body>
</html>