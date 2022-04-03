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
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        //$bdd = new PDO("mysql:host=localhost;dbname=loginandregister",$username,$password);
       // $conn = new PDO("mysql:host=$servername;dbname=loginandregister", $username, $password);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "loginandregister";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        //verification si l`utilisateur existe deja
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc())
            {
                //echo "<tr><td>".$row["id"]."</td><td>".$row["FirstName"]." ".$row["LastName"].$row["phone"]."</td></tr>";
                if($row['email'] == $email || $row['phone'] == $phone)
                {
                    //die("<br>".$row['phone']."<br>");
                    return true;
                }
            }
        } 

        $conn->close();

        return false;
    }

    //function to register a user
    function registering($var1,$var2,$var3,$var4,$var5,$var6){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "loginandregister";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //haching of the password
        $salt = "389folong";
        $hasPassword = md5($salt.$var6);

        // $sql2 = $conn->prepare("INSERT INTO users (FirstName, LastName,userame,phone,email, passWord)
        // VALUES (?,?,?,?,?,?)");

        $sql2 = $conn->prepare("INSERT INTO users (FirstName, LastName,userame,phone,email, passWord) VALUES (?, ?, ?, ?, ?, ?)");

        //$sql2->bind_param("sssiss",$var1,$var2,$var3,$var4,$var5,$hasPassword);
       // $stmt->bind_param("sss", $firstname, $lastname, $email);
        
        // set parameters and execute
        // $firstname = "John";
        // $lastname = "Doe";
        // $email = "john@example.com";
        $sql2->execute(arrays($var1,$var2,$var3,$var4,$var5,$hasPassword));
        
            //    $sql2->bind_param("s",$var1);
            //    $sql2->bind_param(2,$var2);
            //    $sql2->bind_param(3,$var3);
            //    $sql2->bind_param(4,$var4);
            //    $sql2->bind_param(5,$var5);
            //    $sql2->bind_param(6,$hasPassword);
        die($sql2);
       $sql2->execute();
       die("executer"); 

        // if ($conn->query($sql2) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql2 . "<br>" . $conn->error;
        // }

        
        $conn->close();
        return true;
    }
?>