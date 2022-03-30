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
    }
?>