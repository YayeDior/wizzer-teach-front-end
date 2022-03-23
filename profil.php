<!DOCTYPE html>
<html lang="en">
<head>
    <div align="left">
        <h2>Profil</h2>  
  </div>
</head>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<body>
  <form>
    <div align="center">
    <div class="inputs" width="10000">

                 <?php
                 session_start();
                //ouverture de la base
                include "bdd.php";
 
                ?>
                    
                        <input type="text"  placeholder="<?=$_SESSION['nom'] ?>" size = "75"><br><br><br><br>
                        <input type="text" placeholder="<?= $_SESSION['prenom'] ?>" size = "75"><br><br><br><br>
                        <input type="text" placeholder="<?= $_SESSION['github'] ?>" size = "75" ><br><br><br><br> 
                    <?php
                     
                     ?>
    </div>
</div>
	  
	   <div align="center">
     <p><a href="dashbordeleve.php"  class="connexionelev">Enregistrer</a></p>
    </div>
    <br></br>
    <div align="center">
            <p><a href=""  class="connexion">Supprimer mon compte</a></p>
            <p><a href=""  class="connexion">Desactiver mon compte</a></p>
        </div>
	</form>     
	
</body>
</html>