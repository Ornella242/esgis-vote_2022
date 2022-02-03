<?php
        $dns = "mysql:host=localhost;dbname=esgisvote";
        $username = "root";
        $password = "";
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        try{
            $pdo= new PDO($dns, $username, $password, $option);

        }catch(PDOException $e){
            echo 'erreur de connexion';
        }

?>