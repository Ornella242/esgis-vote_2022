<?php
    
    include('connect.php');


        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['groupe']) && isset($_POST['grade']) && isset($_POST['details']) && isset($_POST['note']) && isset($_POST['email']) && isset($_POST['pwd'])) {

            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['niveau']) && !empty($_POST['groupe']) && !empty($_POST['grade']) && !empty($_POST['details']) && !empty($_POST['note']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $niveau = $_POST['niveau'];
            $groupe = $_POST['groupe'];
            $grade = $_POST['grade'];
            $details = $_POST['details'];
            $note = $_POST['note'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
        
            $requete = $pdo->prepare("INSERT INTO membre( nom, prenom, niveau, groupe, grade, details, note, email, pwd) VALUES(?,?,?,?)");
          
            if ($requete->execute(array($nom,$email,$subject,$message))) {
               
                header('Location: index.php?success=message envoyé avec succès');
             }
            
        }
    }
 ?>  
