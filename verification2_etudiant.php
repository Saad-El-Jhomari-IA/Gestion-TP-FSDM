<?php
session_start();

    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
          
    if(isset($_POST["web_dynamique"])){
        $web = 1;
    } else {
        $web = 0;
    }
    
    if(isset($_POST["ro"])){
        $ro = 1;
    } else {
        $ro = 0;
    }
    
    if(isset($_POST["reseaux"])){
        $res = 1;
    } else {
        $res = 0;
    }
    
    if(isset($_POST["base_de_donnee"])){
        $base = 1;
    } else {
        $base = 0;
    }
    
    if(isset($_POST["projet_tutore"])){
        $proj = 1;
    } else {
        $proj = 0;
    }
    
    if(isset($_POST["projet_tutore2"])){
        $p2 = 1;
    } else {
        $p2 = 0;
    }
  
  
    
    $req1="UPDATE `etudiant` SET `nometu`='".$_POST["Nom1"]."', `passwordetu`='".$_POST["Pass1"]."', `web_dynamique`=".$web.", `reseaux`=".$res.", `projet_tutore`=".$proj.", `projet_tutore2`=".$p2.", `base_de_donnee`=".$base.", `ro`=".$ro." WHERE `cneetud`='".$_SESSION["CODET"]."';";
    $rep1=$cn1->exec($req1);
    if($rep1){
        echo "Update complete";
    }else{
        echo "Update failed";
    }
?>