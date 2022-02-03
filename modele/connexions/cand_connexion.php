<?php
    
    include('../function-php/function.php');

      if (isset($_POST['submit'])){
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['niveau']) && isset($_POST['groupe']) && isset($_POST['grade']) && isset($_POST['details']) && isset($_POST['note']) && isset($_POST['email']) && isset($_POST['pwd'])) {

            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['niveau']) && !empty($_POST['groupe']) && !empty($_POST['grade']) && !empty($_POST['details']) && !empty($_POST['note']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {

            $nom = clean_champs($_POST['nom']) ;
            $prenom =clean_champs($_POST['prenom']) ;
            $niveau = clean_champs($_POST['niveau']);
            $groupe = clean_champs($_POST['id_groupe']);
            $grade = clean_champs($_POST['grade']);
            $details =clean_champs($_POST['details']);
            $note =clean_champs( $_POST['note']);
            $email =clean_champs($_POST['email']);
            $pwd =clean_champs($_POST['pwd']);
        
            $requete = $pdo->prepare("INSERT INTO membre( nom, prenom, niveau, id_groupe, grade, details, note, email, pwd) VALUES(:nom, :prenom, :niveau, :id_groupe, :grade, :details, :note, :email, :pwd)");
          
            if ($requete->execute(array( 'nom'=> $nom,
                                    'prenom' => $prenom,
                                    'niveau' => $niveau,
                                    'id_groupe' => $groupe,
                                    'grade' => $grade,
                                    'details' => $details,
                                    'note' => $note,
                                    'email' => $email,
                                    'pwd' => $pwd))) {
               
                header('Location: candidat_form.php?success=message envoyé avec succès');
             }
            
        }
    }
}
 ?>  
