<?php
   session_start();
   //connexion avec la base
   include "bdd.php";

   //condition pour vérifier que les champs sont bien saisi
   if(!empty($_POST['email']) AND !empty($_POST['password'])   ){

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
   

    $recupUser = $bdd->prepare('SELECT * FROM eleve WHERE email = ? AND `password` = ?' );
    $recupUser->execute(array($email, $password));
    
    //condition de vérification
    if($recupUser->rowCount() > 0){
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['id_eleve'] = $recupUser->fetch()['id_eleve'];

      $plus = $bdd->prepare('SELECT * FROM eleve WHERE id_eleve = ?');
      $plus->execute(array($_SESSION['id_eleve']));
      $row = $plus->fetch();

      $_SESSION['nom'] = $row['nom'];
      $_SESSION['prenom'] = $row['prenom'];
      $_SESSION['github'] = $row['github'];


      header('Location: profil.php');
      
    }else {
      echo "Votre mot de passe ou email est incorrect";
    }

   } else {
     
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>

  <form action="" method="post">
     
	  	<div class="logo">
		<img src="images/logo.png" width="100" align="center"/>
		</div>
          <h2>CONNEXION AVEC</h2>
    <div class="social-media">
    <p><a href="https://github.com" class="fab fa-github-alt"  onclick= "window.location.href='https://github.com'"></a></p>
    </div>
	   <p class="choose-email">ou se connecter avec</p>
    
    <div class="inputs">
      <input type="email" id = "email" name ="email" placeholder="Email" />
      <input type="password" id = "password" name = "password" placeholder="Mot de passe">
    </div>
	  
	   <div align="center">
      <button type="submit">Valider</a></button>
    </div>
    
    <p class="passe oublié"><p>J'ai oublié mon mot de passe <span><a href=""> cliquez ici pour réinitialiser</a></span></p>
		
		 
		    <p><a href="inscriptionelev.php"  class="inscriptionelev">Pour m'inscrire c'est ici</a></p>


        
                   
	
</body>
</html>
