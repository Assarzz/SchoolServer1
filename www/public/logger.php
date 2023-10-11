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
        $userFound = false;
        echo "----------";
        echo $userArray;
        echo "----------";

        for ($i=0; $i < count($userArray); $i++) { 
            if ($userArray[$i]["username"] == $user["username"] && $userArray[$i]["password"] == $user["password"]) {
                # found user in database
                # do log in stuff
                $userFound = true;
                echo "found user and logg in!";
            }
        }

        if ($userFound == false){

            echo "user was not found, so it was created!";
            $userArray[] = $user;
        }




?> 
    
</body>
</html>


