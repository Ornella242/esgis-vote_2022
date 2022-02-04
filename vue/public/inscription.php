<?php  /* require_once ("../../modele/function-php/bdd.php"); */
include '../../modele/inscription/register.php' ; 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../modele/inscription/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css	"/>
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
 
  <title>Transparent form</title>
</head>
 
<body>
<div class="container register">

    <div class="row">
        <div  class="col-md-3 register-left">
          
          <h1 class= "bde">WELCOME TO BDE</h1>
            <img src="../../modele/inscription/vote.jpg" alt="" />
        </div>
        <div class="col-md-9 register-right">
           <form action="../../modele/inscription/register.php" method="POST">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">INSCRIVEZ VOUS POUR VOTER LE BUREAU DES ETUDIANTS DE CETTE ANNEE!!!</h3>
                        <div class="row register-form">
                        <div class="error">
                        <?php

                            if (isset($_GET['error']))
                            {?>             
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_GET['error']; ?>
                                </div>
                            <?php } 
                        
                        ?> 
                        </div>

                        <!--PARTIE 1 -->
                            <div class="col-md-6">
                            <!--NOMS ETUDIANTS -->
                                <div class="form-group">
                                    <input type="text" name="nom" id="nom" class="form-control" placeholder="NOMS *" value="" >
                                </div>

                                <!--PRENOMS ETUDIANTS -->
                                <div class="form-group">
                                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="PRENOMS *" value="" >
                                </div>

                                <!--NIVEAU ETUDIANTS -->
                                <div class="form-group">
                                    <select  name="niveau" id="niveau" class="form-control">
                                    <option>SELECTIONNER NIVEAU</option>
                                    <option>LICENCE1</option>
                                    <option>LICENCE2</option>
                                    <option>LICENCE3</option>
                                    </select>
                                </div>

                                <!--FILIERE ETUDIANTS -->
                                <div class="form-group">
                                    <select  name="filiere" id="filiere" class="form-control">
                                        <option> SELECTIONNER FIIERE</option>
                                        <option>IRT-SRS</option>
                                        <option>IRT</option>
                                        <option>GESTION</option>
                                    </select>
                                </div>
                            </div>
                                <!--PARTIE 2 -->
                            <div class="col-md-6">
                            <!--GROUPE ETUDIANTS -->
                            <div class="form-group">
                                    <select  name="groupe" id="groupe" class="form-control">
                                    <option> SELECTIONNER GROUPE</option> 
                                    <option>GROUPE1</option>
                                    <option>GROUPE2</option>
                                    <option>GROUPE3</option>
                                    </select>
                                </div>

                                <!--MAIL ETUDIANTS -->
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="MAIL@gmail.com *" value="" >
                                </div>

                                <!--PWD ETUDIANTS -->
                                <div class="form-group">
                                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="MOT DE PASSE *" value="" >
                                </div>

                                    <!--PWD ETUDIANTS -->
                                    <div class="form-group">
                                    <input type="password" name="pwdconfirm" id="pwdconfirm" class="form-control" placeholder="CONFIRMER MOT DE PASSE *" value="" >
                                </div>
                                <div class="text" class="form-group">
						          <input type="submit" id="submit"  name="submit" value="REGISTER" class="btnRegister">
					            </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
           </form>
           
        </div>
    </div>

</div>
  <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
</body>
 
</html>