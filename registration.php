<?php
    
    require_once("bdconnected.php");

    if (isset($_POST['firstName']) && isset($_POST['password1']) && isset($_POST['phone']) && isset($_POST['email'])) 
    {
        $_SESSION['connected'] = false;
        if(AlreadyRegister($_POST['email'],$_POST['phone']))
        {
            //verifie si l`utilisateur est deja enregistrer
            $faillure = "cette adresse email est deja utiliser";
            //die("error in already register");
            header("Location: index.php?faillure=".urlencode($faillure));
            return ;
            //header("Location : index.php.urlencode()");
        }
        
        if ($_POST['password1']!=$_POST['password2']) 
        {
            //verifie si les deux mot de passe corespondent
            $faillure = "les deux mot de passes ne coresponde pas.";
            //header("Location : index.php.urlencode()");
            header("Location: index.php?faillure=".urlencode($faillure));
            return ;
        }
            
        $x = registering($_POST['firstName'],$_POST['surName'],$username,$_POST['phone'],$_POST['email'],$_POST['password1']);
        if ($x) {
           // die($x."the rest ");
            //creation de la variable connected
            $_SESSION['connected'] = true;
            $_SESSION['username'] = $_POST['username'];
            //header("Location : dashboard.php.urlencode()");
            header("Location: dashboard.php");
            return ; 

        }
        else
        {
            $faillure = "erreur de connection les donnees entrers sont incorecte";
            header("Location: index.php?faillure=".urlencode($faillure));
            return ;
        }
    }
    else 
    {
        $faillure = "erreur de connection les donnees entrers sont incorecte";
        header("Location: index.php?faillure=".urlencode($faillure));
        return ;
    }
?>