<?php
session_start();
if(isset($_SESSION["login"])) {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/styleacceuil.css" rel="stylesheet">
<link href="assets/css/style12.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div>
    <!-- <a href="deconnexion_admin.php"> deconnexion </a>
 </div>
   

<a href ="javascript:history.go(-1)">Revenir à la précédente</a>
<a href ="page_principale_administration.php">Revenir à ACCEUILE</a> -->


<div class="div1">
    <div class="row">
        <div class="col-md-5 ">
          <img  class="img4" src="assets/img/2.jpg" alt="IMG4" >
        </div> 
        <div class="col-md-6"> 
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
        <ul class="navbar-nav">
        <li class="nav-item">
        </li>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link "  href="Ajouter_Etudiant_Admin.php" style="color:blue;"> <B> Ajouter Etudiant </B></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="supprimer_etudiant.php" style="color:BLUE;"><b>Supprimer Etudiant</b></a>
        </li>
      

        <li class="nav-item">
            <a class="nav-link" href="Etudiant.php" style="color:BLUE;"> <b>Espace Etudiant</b> </a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="deconnexion_admin.php" style="color:BLUE;"><b>Déconnexion</b> </a>
        </li>
         
             </ul>
            </div>
         </div>
         </nav>

        </div>
        <div class="col-md-1" style="width: 100px;height 30px;  ">
          <img  class="img rounded-circle"  style="width:100%;height:100%;"  src="assets/img/IMG.jpg" alt="IMG5">
        </div>       
    </div>
</div>
<a href="page_principale_administration.php">
		<svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Retour 
	</a>
    

<h1 align="center" >Modifier Un Etudiant</h1>
<div align="center" class="card" style="width: 50%;margin-left:300px;margin-top:40px">
    <h2>Entrer le cne d'etudiant que vous voulez modifier</h2>
<form method = "post">

<pre>

      <b>Entrez le code:</b>        <input  type = "text"  name = "Code" required />

<b>Entrez le nom et Prenom:  </b>   <input  type = "text"  name = "Nom"  required/>
<input style="margin-top: 30px;" class="btn btn-success" type = 'submit'  value =  'Envoyer' /> <input style="margin-top: 30px;" class="btn btn-secondary" type = 'reset'  value =  'Annuler' />
</pre>
</form>
</div>
</body>
</html>

<?php


if(isset($_POST["Code"])){
    $_SESSION["CODET"]=$_POST["Code"];
    try {
        $cn1 = new PDO("mysql:host=localhost;dbname=tp;port=3306;charset=utf8", 'root', '');
    } catch(PDOException $erreur) {
        die("Erreur de connexion : " . $erreur->getMessage());
    }
    $req = "SELECT `nometu`, `passwordetu`, `web_dynamique`, `reseaux`, `projet_tutore`, `projet_tutore2`, `base_de_donnee`, `ro`, `cneetud`,count(*) as 'pass' FROM `etudiant` WHERE cneetud='".$_POST["Code"]."' and nometu='".$_POST["Nom"]."';";
    $rep = $cn1->query($req);
    while($ligne=$rep->fetch()){
        if($ligne["pass"]==1){
            ?>
        <!-- <form align="center" action="verification2_etudiant.php" method="post">
            <pre>
                <label for="Nom1">Entrez un nouveau nom et prénom :</label>
            <input type="text" name="Nom1" id="Nom1" required/>
            <label for="Pass1">Affecter un mot de passe : </label>   <input type="password" name="Pass1" id="Pass1" required/>
            <label for="web_dynamique">Web dynamique :</label>   <input type="checkbox" name="web_dynamique" value="1" id="web_dynamique"/>
            <label for="ro">Recherche opérationnel :</label>   <input type="checkbox" name="ro" value="1" id="ro"/>
            <label for="base_de_donnee">Base de données :</label>   <input type="checkbox" name="base_de_donnee" value="1" id="base_de_donnee"/>
            <label for="projet_tutore">Projet tutoré :</label>    <input type="checkbox" name="projet_tutore" value="1" id="projet_tutore"/>
            <label for="projet_tutore2">Projet tutoré 2 :</label>   <input type="checkbox" name="projet_tutore2" value="1" id="projet_tutore2"/>
            <label for="reseaux">Réseaux :</label>  <input type="checkbox" name="reseaux" value="1" id="reseaux"/>
            <input type="submit" value="Envoyer"/> <input type="reset" value="Annuler"/>
            </pre>
            
        </form> -->
        <div class="card"  align="center" style="width: 50%; margin-left:300px;margin-top:40px;">
        <h3 align="center">Modification de l'étudiant <?=$_POST["Nom"]?></h3>
   
   <form style="margin-top: 20px;" method="post" action=""  class="my-form">

 <div class="form-group">
   <label for="Nom">Modifier le nom et prénom:</label>
   <input type="text" class="form-control" id="Nom" name="Nom1" placeholder="Saisir le nom complet" required>
 </div>
 <div class="form-group">
   <label for="password">Modifier le mot de passe:</label>
   <input type="password" class="form-control" id="password" name="Pass1" required>
 </div>
 <div class="form-group">
   <label>Modifier les modules pour étudiant:</label><br>
   <div class="form-check">
     <input class="ABBBBBBBBBB" style="margin-left: 250px;" class="form-check-input" type="checkbox" name="web_dynamique" id="web_dynamique" value="1">
     <label class="form-check-label" for="web_dynamique">Web dynamique</label>
   </div>
   <div class="form-check">
     <input class="form-check-input" class="ABBBBBBBBBB" style="margin-left: 250px;" type="checkbox" name="ro" id="ro" value="1">
     <label class="form-check-label" for="ro">Recherche opérationnelle</label>
   </div>
   <div class="form-check">
     <input class="form-check-input" class="ABBBBBBBBBB" style="margin-left: 250px;" type="checkbox" name="base_de_donnee" id="base_de_donnee" value="1">
     <label class="form-check-label" for="base_de_donnee">Base de données</label>
   </div>
   <div class="form-check">
     <input class="form-check-input" class="ABBBBBBBBBB" style="margin-left: 250px;" type="checkbox" name="projet_tutore" id="projet_tutore" value="1">
     <label class="form-check-label" for="projet_tutore">Projet tutoré</label>
   </div>
   <div class="form-check">
     <input class="form-check-input" class="ABBBBBBBBBB" style="margin-left: 250px;" type="checkbox" name="projet_tutore2" id="projet_tutore2" value="1">
     <label class="form-check-label" for="projet_tutore2">Projet tutoré 2</label>
   </div>
   <div class="form-check">
     <input class="form-check-input" class="ABBBBBBBBBB" style="margin-left: 250px;" type="checkbox" name="reseaux" id="reseaux" value="1">
     <label class="form-check-label" for="reseaux">Réseaux</label>
   </div>
 </div>
 <div class="form-group">
   <button type="submit" class="btn btn-success">Envoyer</button>
   <button type="reset" class="btn btn-secondary">Annuler</button>
   
   <a class="btn btn-primary" href="deconnexion_admin.php"> Déconnexion </a>
 </div>
</form>

   </div>

<?php
        }else{
            echo"Vos donnee est inorrecte";
        }
    }

}

if(isset($_POST["Code"])&&isset($_POST["Pass1"])&&isset($_POST["Nom1 "])){
    
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
    echo"".$_POST["Pass1"]." ".$_POST["Nom1"]." ".$web."".$res." ".$proj;
  
    $req2="UPDATE `etudiant` SET `nometu`='".$_POST["Nom1"]."', `passwordetu`='".$_POST["Pass1"]."', `web_dynamique`=".$web.", `reseaux`=".$res.", `projet_tutore`=".$proj.", `projet_tutore2`=".$p2.", `base_de_donnee`=".$base.", `ro`=".$ro." WHERE `cneetud`='".$_POST["Code"]."';";
    $rep2=$cn1->exec($req2);
    if($rep2){
      ?>  <div  style="width: 20%;margin-left:800px" class="alert alert-success"><b align="center"><?php echo "etudiant ".$_POST["Nom"]." est modifier";?></b></div><?php 
    }else{
        echo "Update failed";
    }
}
?>


<?php
 } else{
    header("Location: acceuil.php");exit;
 } 
 