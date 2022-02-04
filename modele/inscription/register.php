<?php  

include_once '../../modele/function-php/bdd.php';


$error = null;

if(isset($_REQUEST['submit']) ){
    
	if(isset($_POST['nom']) && !empty($_POST['nom'])){

        if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
            
            if(isset($_POST['niveau']) && !empty($_POST['niveau'])){

                if(isset($_POST['filiere']) && !empty($_POST['filiere'])){
                    
                    if(isset($_POST['groupe']) && !empty($_POST['groupe'])){
                        
                        if(isset($_POST['email']) && !empty($_POST['email'])){
                            
                            if(isset($_POST['pwd']) && !empty($_POST['pwd'])){
                                
                                if(isset($_POST['pwdconfirm']) && !empty($_POST['pwdconfirm'])){

                                    // renverra false si l'email contient des caractères incompatibles
                                    if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){

                                      // retirera les caractères interdits et renverra le nom ainsi nettoyée
                                        $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $niveau = filter_input(INPUT_POST, "niveau", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $filiere = filter_input(INPUT_POST, "filiere", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $groupe = filter_input(INPUT_POST, "groupe", FILTER_SANITIZE_SPECIAL_CHARS);
                                        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                                        $pwd = filter_input(INPUT_POST, "pwd", FILTER_SANITIZE_STRING);
                                        $pwdconfirm = filter_input(INPUT_POST, "pwdconfirm", FILTER_SANITIZE_STRING);

                                        // verifier si l'utilisateur existe deja
                                        $sql = "SELECT * FROM etudiant WHERE nom = :nom OR email = :email";
                                        $select = $bdd->prepare($sql);
                                        $select->execute (array(
                                            "nom" => $nom,
                                            "email" => $email ));
                
                                            $result = $select->fetch();

                                            if(($result) == 0  ){

                                                if($pwd == $pwdconfirm){

                                                    $sql = "INSERT INTO etudiant (nom, prenom, niveau, filiere, groupe, email, pwd) 
                                                    VALUE (:nom, :prenom, :niveau, :filiere, :groupe, :email, :pwd)";
                                                    $insert = $bdd->prepare($sql);
                                                    $insert->execute (array(
                                                     "nom" => $nom,
                                                     "prenom" => $prenom,
                                                     "niveau" => $niveau,
                                                     "filiere" => $filiere,
                                                     "groupe" => $groupe,
                                                     "email" => $email,
                                                     "pwd" => $pwd
                                                 
                                                  
                                                    ));

                                                    if($insert->rowCount()== 1){

                                                        header('Location: ../../vue/public/inscription.php?success = inscription reussir avec succès');
                                                        
                                                    }else{
                                                        header("Location: ../../vue/public/inscription.php?error= ERREUR D'INSCRIPTION!!!");
                                                    }


                                                }else{
                                                    header("Location: ../../vue/public/inscription.php?error= VOTRE MOT DE PASSE N'EST PAS JUSTE!!!");
                                    
                                                }


                                            }else{
                                                header("Location: ../../vue/public/inscription.php?error= L'UTILISATEUR EXISTE DEJA!!!");
                                            }

                                    }else{
                                        header("Location: ../../vue/public/inscription.php?error= DESOLER VOTRE MAIL N'EST PAS VALIDE!!");
                                    }
        
                                }else{
                                    header("Location: ../../vue/public/inscription.php?error= CONFIRMEZ VOTRE MOT DE PASSE!!");
                                }

                            }else{
                                header("Location: ../../vue/public/inscription.php?error= VOTRE MOT DE PASSE!!");
                            }

                        }else{
                            header("Location: ../../vue/public/inscription.php?error=ENTREZ VOTRE MAIL!! ");

                        }

                    }else{
                        header("Location: ../../vue/public/inscription.php?error= SELECTIONNEZ UN GROUPE SVP!!");
                        
                    }

                }else{
                    header("Location: ../../vue/public/inscription.php?error= CHOISISSEZ VOTRE FILIERE SVP!!");
                    
                }

            }else{
                header("Location: ../../vue/public/inscription.php?error= VOTRE NIVEAU SVP!!");
            }

        }else{
            header("Location: ../../vue/public/inscription.php?error= DESOLER LE CHAMPS PRENOMS EST VIDE!!");
        }

    }else{
        header("Location: ../../vue/public/inscription.php?error= DESOLER LE CHAMPS NOM EST VIDE!!");
    }

}


?> 

