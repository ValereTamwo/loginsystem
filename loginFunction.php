<?php

require_once("bdconnected.php");

$x = registering($_POST['firstName'],$_POST['surName'],$username,$_POST['phone'],$_POST['email'],$_POST['password']);
        
if ($x) {
    //creation de la variable connected
    $_SESSION['connected'] = true;
    //header("Location : dashboard.php.urlencode()");
    header("Location: dashboard.php");
    return ; 

}

?>