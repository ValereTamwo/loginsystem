<?php
    require_once("bdconnected.php");
    $x = $_SESSION['connected'];
    if ($x) 
    {
        echo"connection success";
        //liste des action a mener
    }
    else
    {
        echo"erreur de connection";
        $faillure = "Mot de passe ou email inccorect";
        header("Localhost: index.php?faillure=".urldecode($faillure));
        return ; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>
        bienvenu dans la page d`acceuille.
    </h1>
</body>
</html>