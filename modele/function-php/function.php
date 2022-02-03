<?php 
//Ici sera defini l'ensemble des functions
session_start();


//connexion à la base de données

        $dns = "mysql:host=localhost;dbname=esgisvote";
        $username = "root";
        $password = "";
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try{
            $pdo= new PDO($dns, $username, $password, $option);

        }catch(PDOException $e){
            echo 'erreur de connexion';
        }

        
 //  Function qui format les champs en htmlentities et addslashes
 
function clean_champs( $champs ): string{
    return htmlentities(addslashes($champs));
  }

?>