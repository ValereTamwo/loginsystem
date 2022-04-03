<?php
    session_start();
    //require_once("bdconnected.php");
    $_SESSION['connected']=false;
    if (isset($_POST['email']) && isset($_POST['password'])) {
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
            
                //die($_POST['email']."eeee");
                $salt = "389folong";
                $mot = md5($salt.$_POST['password']);
                if(($_POST['email'] == $row['email']) && ("fphrighnvosb" == $row['passWord']))
                {
                        
                        $_SESSION['connected'] = true;
                        // $salt = "389folong";
                        // $hasPassword = md5($salt.$var6);
                
                        // $sql2 = $bdd->prepare("INSERT INTO users (firstname, lastname,username,phone,email, password)
                        // VALUES (?,?,?,?,?,?)");
                        // $sql2->execute($var1,$var2,$var3,$var4,$var5,$hasPassword);
                        $conn->close();
                        header("Location: dashboard.php");
                        return ; 
                    }
            }
            if ($_SESSION['connected']) 
            {
                die("user is not connected");
                $faillure = "Mot de passe ou email inccorect";
                header("Localhost: index.php?faillure=".urldecode($faillure));
                return ; 
            }
        } 
    }
    if ($_SESSION['connected']) {
        $faillure = "Mot de passe ou email inccorect";
        header("Localhost: index.php?faillure=".urldecode($faillure));
        return ; 
    }
?>