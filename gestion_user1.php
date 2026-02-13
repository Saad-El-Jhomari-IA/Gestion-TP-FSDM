<?php
    // session_start();
    // try {
    //     $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
       
    // } catch(PDOException $erreur) {
    //     die("Erreur de connexion : " . $erreur->getMessage());
    // }
    // echo"hi";
 
     
    //             if(isset($_POST["web_dynamique"])){
    //                 $w=1;
    //             }
    //             else{
    //                 $w=0;
    //             }
    //             if(isset($_POST["ro"])){
    //                 $r=1;
    //             }
    //             else{
    //                 $r=0;
    //             }
    //             if(isset($_POST["reseaux"])){
    //                 $re=1;
    //             }
    //             else{
    //                 $re=0;
    //             }
    //             if(isset($_POST["base_de_donnee"])){
    //                 $b=1;
    //             }
    //             else{
    //                 $b=0;
    //             }
    //             if(isset($_POST["projet_tutore"])){
    //                 $p=1;
    //             }
    //             else{
    //                 $p=0;
    //             }
    //             if(isset($_POST["projet_tutore2"])){
    //                 $p2=1;
    //             }
    //             else{
    //                 $p2=0;
    //             }
    //             echo"".". $w.",".$re.",".$p.",".$p2.",".$b.",".$r.";
    //             $req3="INSERT INTO `liste_etudiant_tp`(`nometudtp`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetudtp`,`passwordtp`) VALUES ('" . $_POST["Nom"]."',". $w.",".$re.",".$p.",".$p2.",".$b.",".$r.",'".$_POST["Code"]."',".$_POST["Pass"].");";
    //          $rep33=  $cn1->exec($req3);
    //             if($rep33){
    //                 echo"bien inserer";
    //             }else{
    //                 echo"non inserer";
    //             }
             
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
    
    $req3="INSERT INTO `enseignant`(`cneens`, `nomen`, `passworden`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`) VALUES ('".$_POST["Code"]."','".$_POST["Nom"]."',".$_POST["Pass"].",".$w.",".$re.",".$p.",".$p2.",".$b.",".$r.")";
    $rep33 = $cn1->exec($req3);
    
    if($rep33){ ?>





 
        <?php
      header("Location: Ajouter_Enseignant_Admin.php");exit;
        
    } else {
        header("Location: acceuil.php");exit;?><?php
    }    ?>

    <a href ="javascript:history.go(-1)">Revenir à la précédente</a>
    <a href="page_principale_administration.php">acceuil</a>
    <div>
    <a href="deconnexion_admin.php"> deconnexion </a>
 </div>
   
   <?php 
}  else{
    header("Location: acceuil.php");exit;
 } 
 ?>
