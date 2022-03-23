<?php

// Cette condition est mise pour le remplissage de tous les champs
if(isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['github'])  and isset($_POST['password'])  and $_POST['email'] != "" and $_POST['nom'] != "" and $_POST['prenom'] != "" and $_POST['github'] != "" and $_POST['password'] != "")

{

    //Nous recupérons les champs
   $email = htmlspecialchars($_POST['email']);
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $github = htmlspecialchars($_POST['github']);
   $password = htmlspecialchars($_POST['password']);

    //connexion avec la base
    include "bdd.php";

    //ligne de code pour inserer dans la base les champs 
    $sauveg = $bdd->prepare('INSERT INTO eleve(email, nom, prenom, github, `password`) VALUES (?,?,?,?,?)');
    $sauveg->execute(array($email,$nom,$prenom,$github,$password));
    header('Location: dashbordeleve.php');

} else
{
    //renvoi en cas d'erreur à la page d'inscription
    header('Location: inscriptionelev.php?erreur=1');
}
