<?php

use LDAP\Result;

session_start();
//connectio to the date base
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=loginandregister", $username, $password);
  $bdd = new PDO("mysql:host=localhost;dbname=loginandregister",$username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    //reading of all user
    $sql = "SELECT * FROM Users ";
    //die($sql);
    $result = $conn->query($sql);


    //function to check if user is already register 
    function AlreadyRegister($email,$phone){
        $servername = "localhost";
        $username = "root";
        $password = "";
        //$bdd = new PDO("mysql:host=localhost;dbname=loginandregister",$username,$password);
        $conn = new PDO("mysql:host=$servername;dbname=loginandregister", $username, $password);

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        //verification si l`utilisateur existe deja
        while ($a <= 10) {
            # code...
        }
        $tout = $result->fetchAll();
        foreach($tout as $user){
            if($user['email'] == $email || $user['phone'] == $phone){
                die($user->phone);
                return true;
            }
        }

        return false;
    }

    //function to register a user
    function registering($var1,$var2,$var3,$var4,$var5,$var6){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bdd = new PDO("mysql:host=localhost;dbname=loginandregister",$username.$password);

        //haching of the password
        $salt = "389folong";
        $hasPassword = md5($salt.$var6);

        $sql2 = $bdd->prepare("INSERT INTO users (firstname, lastname,username,phone,email,pass)
        VALUES (?,?,?,?,?,?)");
        $sql2->execute($var1,$var2,$var3,$var4,$var5,$hasPassword);
        return true;
    }
?>