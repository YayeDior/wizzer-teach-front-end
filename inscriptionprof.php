<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire d'inscription Professeur</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>

  <?php
  if(isset($_GET['erreur'])) 
  {
      $erreur = $_GET['erreur']; 
  ?>
  <div class="alert alert-danger"><?= $erreur == 2 ? "incorrect" : "Paramètres incorrects"?>"</div>
   <?php
  }
   ?>
    
  <form action="sauvegarde.php" method="post">
     
	  	<div class="logo">
		<img src="images/logo.png" width="100" align="center"/>
		</div>
          <h2>M'INSCRIRE AVEC</h2>
    <div class="social-media">
		<p><a href="" class="fab fa-github-alt"  onclick="window.location.href ='https://github.com'"></a></p>
    </div>
	   <p class="choose-email">ou s'inscrire avec</p>
    
    <div class="inputs">
      <input type="email" id="email" name="email" placeholder="Email" />
      <input type="text" id="nom" name="nom" placeholder="Nom" />
      <input type="text" id="prenom" name="prenom" placeholder="Prenom" />
      <input type="text" id="github" name="github" placeholder="Profil github" />
      <input type="password" id="password" name="password" placeholder="Mot de passe">
	    <input type="password" placeholder="Vérification du mot de passe">
    </div>
	  
	   <div align="center">
      <button type="submit">Valider</button>
    </div>
    	 
		    <p><a href="connexionprof.php"  class="connexionprof">Pour me connecter c'est ici</a></p>
	 
	</form>     
	
</body>
