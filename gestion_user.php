<?php
    session_start();
    if(isset($_SESSION["login"])) {
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    
    if(isset($_POST["web_dynamique"])){
        $w=1;
    } else {
        $w=0;
    }
    
    if(isset($_POST["ro"])){
        $r=1;
    } else {
        $r=0;
    }
    
    if(isset($_POST["reseaux"])){
        $re=1;
    } else {
        $re=0;
    }
    
    if(isset($_POST["base_de_donnees"])){
        $b=1;
    } else {
        $b=0;
    }
    
    if(isset($_POST["projet_tutore"])){
        $p=1;
    } else {
        $p=0;
    }
    
    if(isset($_POST["projet_tutore2"])){
        $p2=1;
    } else {
        $p2=0;
    }
    
    $req3="INSERT INTO `etudiant`(`nometu`, `passwordetu`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetud`)  VALUES ('".$_POST["Nom"]."',".$_POST["Pass"].",".$w.",".$re.",".$p.",".$p2.",".$b.",".$r.",'".$_POST["Code"]."')";
    $rep33 = $cn1->exec($req3);


    if($rep33){
      
      header("Location: Ajouter_Etudiant_Admin.php");exit;
      ?>

        <?php
        
    } else {
        
        header("Location: acceuil.php");exit;
    }

    
    
    ?>
    
    <!-- <a href ="javascript:history.go(-1)">Revenir à la précédente</a>
    <a href="page_principale_administration.php">Espace principale</a>
    <div>
    <a href="deconnexion_admin.php"> deconnexion </a>
 </div> -->
   <?php

} else{
    header("Location: acceuil.php");exit;
 } 
 ?>