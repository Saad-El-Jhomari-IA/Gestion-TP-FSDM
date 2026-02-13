<?php session_start();
include("function.php");
$cn1=connexion();
 $req="DELETE FROM `fichier_etudiant` WHERE id = '". $_GET["id"]."';";
 $rep=$cn1->exec($req);
 
 header("Location: mes_modules-1.php");
 ?>