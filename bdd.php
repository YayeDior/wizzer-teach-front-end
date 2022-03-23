<?php 
        // connexion avec la base de données
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    } catch (Exception $e) 
        {
            die($e->getMessage());
        }
?>