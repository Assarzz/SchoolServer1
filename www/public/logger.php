<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>logger</h1>

<?php
        $userArray = unserialize(file_get_contents("database.dat"));

        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = array("username"=> $username, "password"=> $password);

        function validUser($uA, $u){

            for ($i=0; $i < count($uA); $i++) { 
                if ($uA[$i]["username"] == $u["username"] && $uA[$i]["password"] == $u["password"]) {
                    # found user in database
                    # do log in stuff
                    return true;
                }
            }
            return false;
        }

        if ($_POST["action"] == "login"){

            if ($userArray){

                if (validUser($userArray, $user)) {
    
                    session_start();
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["username"] = $user["username"];
                    header("Location: homepage.php");
                    exit;
                }
                else{
                    $notice = "No account with these details.";
                    header("Location: index.php?notice=" . urlencode($notice));
                    exit;
                }
                
            }
            header("Location: index.php");
        }
        else if ($_POST["action"] == "signup"){
            if (validUser($userArray, $user)) {
                # the user alredy exists
                $notice = "Account with these details already exists.";
                header("Location: index.php?notice=" . urlencode($notice));
            }

        }


        
        
        

?> 
    
</body>
</html>


